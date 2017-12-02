<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Web\User;

class AuthController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function signUp(Request $request)
    {
        $messages = [
    'datetimepicker.required' => 'Please enter your date of birth.',     
    'file_upload.required' => 'Please upload your image.',
    'terms.required' => 'Please accept terms and conditions.'
  ];
      $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'datetimepicker' => 'required|date',
            'gender' => 'required|string',
            'file_upload' => 'required',
            'terms' => 'required', 
      ],$messages);

          $user =  User::signUp($request);

        $imageName = time() . '.' . request()->file_upload->getClientOriginalExtension();
        request()->file_upload->move(public_path('avatar'), $imageName);

        User::where('id', $user->id)->update(['image' => asset('avatar') .'/'. $imageName]);

        \Session::put('user_key', $user->id);
         return redirect('/home');

    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
      $valid = User::signIn($request);
   
       if(!empty($valid)) {
            $request->session()->flash('error', $valid);
            return back();
        }
         return redirect('/home');

    }

    /**
     * Redirect the user to the FaceBook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->scopes([
            'email', 'user_birthday'
        ])->redirect();
    }
    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $facebook_user = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->user();

       if(isset($facebook_user->user))
       {
           
        $data = ['name' => $facebook_user->user['first_name'] .' '.
         $facebook_user->user['last_name'],
        'status' => 1 , 
        'type'  => 'facebook' , 
        'password' => '' , 
        'email' => isset($facebook_user->user['email']) ? $facebook_user->user['email'] : '' , 'dob' => isset($facebook_user->user['birthday']) ? $facebook_user->user['birthday'] : '' ,
         'gender' => isset($facebook_user->user['gender']) ? $facebook_user->user['gender'] : '' ,          
         'image' => isset($facebook_user->avatar_original) ? $facebook_user->avatar_original : '' , 
         'profile_complete' => 0
                ];
       }

        User::socialLogin($data);
       return redirect('/home');
    }

    public function logout(){
        \Session::flush();
         return redirect('/home');
    }
}
