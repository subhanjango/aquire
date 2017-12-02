<?php

namespace App\Web;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status' , 'type' , 'token' , 'dob' , 'gender' , 'image',
        'profile_complete' , 'interests' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public static function socialLogin($data){
        //if found
        $user = self::where('email',$data['email'])->where('type','facebook')->first();
        if (count($user) > 0)
        {
        $data['profile_complete'] = $user->profile_complete;
        unset($data['image']);
        self::where('email', $data['email'])->update($data);
        }else
        {
        $user = self::create($data);
        }

        \Session::put('user_key',$user->id);
    }

    public static function signIn($request){
        $msg= '';
        //if found
        $exist = self::where('email', $request->email)->where('type','custom')->first();
        if (count($exist) > 0) { 
          
            if(\Hash::check($request->password, $exist->password)) {
                \Session::put('user_key', $exist->id);
            }else{
                $msg = 'Invalid Password.';
            }
        }else{
            $msg ='Invalid Email Address.';
        }
        return $msg;
    }

    public static function signUp($request){
        $data = [
            'name' => $request->first_name . ' ' . $request->last_name,
            'status' => 1,
            'type' => 'custom',
            'password' => \Hash::make($request->password),
            'email' => $request->email,
            'dob' => $request->datetimepicker,
            'gender' => $request->gender,
            'profile_complete' => 0
        ];

        $user = User::create($data);

       return $user;
    }
}
