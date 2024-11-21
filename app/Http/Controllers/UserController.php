<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //    public function index(){
    public function index(){
        $phone = User::find(1);
    
        var_dump($phone->phone);

        return view('welcome', ["pHone"=>$phone,"NaME"=>"Kevin"]);
        

    }
}
