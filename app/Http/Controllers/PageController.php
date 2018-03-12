<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    
    public function show(Request $request)
    {
        //$name = $ reque
        $txt_name = $request->input('name');
        $txt_radio = $request->input('radio');
        $txt_hidden = $request->input('hidden');
        $txt_password = $request->input('password');
        


        $array = [
            "NAME" => $txt_name,
            "ID"  => $txt_hidden,
            "GEN" => $txt_radio,
            "NUM" => $txt_password
        ];
        return view('page.page1',$array);

    }

    #show_select

    public function show_select(Request $res){
        return view('page.page12',$res);
    }
    public function show3(Request $request)
    {
        $txt_username = $request->input('user');
        $txt_password = $request->input('password');
        $data=[ "USER" => $txt_User,"PASSWORD" => $txt_Password
        ];
       return view ('page.login',$data);
    }
    public function form_check_login (Request $res){
        $users = DB::select('select * from users where username = ? and password = ?', 
        [$res['username'],$res['password']]
    );
    return view ('page.form_check_login',['users'=>$users]);
    }
    

/////////////////////////////////////////////////////////////////////////

#form_login2
public function form_login2(Request $res){
   
    $users = DB::table('users')->where([
        ['username','=',$res['username']],
        ['password','=',$res['password']]

    ])->get();
    $name = '';
    foreach($users as $value){
     $name = $value->id;   

    }
    $res['name'] = $name;
   
    return view('page.login',$res);
}
/////////////////////////view/////////////////////////////////////////




}//end class