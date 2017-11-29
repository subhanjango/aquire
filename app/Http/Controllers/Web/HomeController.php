<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Web\User;
use App\Web\Tag;
class HomeController extends Controller
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

    public function newsfeed(){
        $user_id = \Session::get('user_key');
        $__dataAssign['user'] = User::find($user_id);

        if($__dataAssign['user']->profile_complete == 0)
        {
        $__dataAssign['method']="post";
        $__dataAssign['action']= url('userInterest');  
        $__dataAssign['tags']=Tag::get();
        return view($this->__Directory . '/interest', $__dataAssign);
        }
        else
        {
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
        }
    }

   
}
