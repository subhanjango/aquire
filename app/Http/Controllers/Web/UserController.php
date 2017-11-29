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
}
