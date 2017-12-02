<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Web\User;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->__Module = "Home";
        $this->__Directory = "web";
        $this->__pKey = "id";
    }

    public function userInterest(Request $request){
        $user_id = \Session::get('user_key');
        $request->validate([
            'interest' => 'required|array'
        ]);
        User::where('id', $user_id)->update(['interests' => '']);
        $interest = implode(',',$request->interest);
        User::where('id',$user_id)->update(['interests'=> $interest , 'profile_complete'=>1]);
        return back();
    }

    public function coverUpload(Request $request){
        $request->validate([
        'photo' => 'mimes:jpeg,bmp,png'
        ]);
         $user_id = \Session::get('user_key');
        $imageName = $user_id.''.time().'.'.request()->cover_upload->getClientOriginalExtension();
                    request()->cover_upload->move(public_path('images'), $imageName);
           
            User::where('id',$user_id)->update(['cover_image'=>'images\\'.$imageName]);

            return back();

    }
    public function userUpload(Request $request){
         $request->validate([
        'photo' => 'mimes:jpeg,bmp,png'
        ]);
         $user_id = \Session::get('user_key');
        $imageName = $user_id.''.time().'.'.request()->user_image->getClientOriginalExtension();
                    request()->user_image->move(public_path('images'), $imageName);
           
            User::where('id',$user_id)->update(['image'=>'images\\'.$imageName]);

            return back();

    }
}
