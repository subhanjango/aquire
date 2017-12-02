<?php

namespace App\Http\Controllers\Web;

use App\Web\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
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
        $this->__Module = "products";
        $this->__Directory = "web";
        $this->__pKey = "id";
       
    }

    public function shop()
    {
         $client = new Client();
        $user_id = \Session::get('user_key');
        $__dataAssign['user'] = User::find($user_id);
        //Location of the user
        $res = $client->request('GET', 'http://ip-api.com/json');
        $location = json_decode($res->getBody());
        $__dataAssign['location'] = $location->city . ' ' . $location->country. ' , ' . $location->regionName;

        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
       
    }
    public function add()
    {
         $client = new Client();
        $user_id = \Session::get('user_key');
        $__dataAssign['user'] = User::find($user_id);
        //Location of the user
        $res = $client->request('GET', 'http://ip-api.com/json');
        $location = json_decode($res->getBody());
        $__dataAssign['location'] = $location->city . ' ' . $location->country. ' , ' . $location->regionName;

        return view($this->__Directory . '/' . $this->__Module .'/'. __FUNCTION__, $__dataAssign);
       
    }
}
