<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

class adminController extends Controller
{

    public function registration(){
        return view ("adminregister");
    }
    
    public function registerAdmin(Request $request){
        
        $request->validate([

            'email'=>'required',
            'password'=>'required',

        ]);
        $admin= new admin();
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $res=$admin->save();
        if('$res'){
            return back()->with('success, you have registered successfuly');
            
        }else{
            return back()->with('fail, sothething wrong');
        }

    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $admin=admin::where('email','=', $request->email)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('loginId',$admin->id);
                return redirect('list');
            }else{
                return back()->with('fail','password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.' );
        }
    }


    public function admindashboard()
    {
        $data= array();
        if(Session::has('loginId')){
            $data=admin::where('id','=',Session::get('loginId'))->first();
        }
        return view('admindashboard',compact('data'));
    }
    
    public function logout()
    {
        if(Session::has('lohinId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
 
    public function destroy(Request $request){
        $request->session()->forget(['email','loginId']);
        return redirect('login');
    }

    public function admin()
    {
        return view('forms');
    }
}
