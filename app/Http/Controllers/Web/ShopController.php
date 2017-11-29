<?php

namespace App\Http\Controllers\Web;

use App\Web\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->__Module = "Shop";
        $this->__Directory = "web";
        $this->__pKey = "id";
    }

    public function shop()
    {
        $user_id = \Session::get('user_key');
        $__dataAssign['user'] = User::find($user_id);
    
            return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
       
    }
}
