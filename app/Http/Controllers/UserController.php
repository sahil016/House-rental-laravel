<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

class UserController extends Controller
{
    
    public function create()
    {
        return view('list2');
    }




    public function register(Request $REQUEST)
    {
    $user=new user;
    // $user->U_id=$REQUEST['U_id'];
    $user->name=$REQUEST['name'];
    $user->password=Hash::make($REQUEST->password);
    $user->U_city=$REQUEST['U_city'];
    $user->U_state=$REQUEST['U_state'];
    $user->email=$REQUEST['email'];
    $user->save();

    session()->flash('success','your account has  been created');
    
        return redirect('/home');
    

    }

    public function view()
    {
        $user=user::all();
        $data=compact(user);
        return view(user/list20);

    }

    

    function show()
    {
        $data= DB::table('user')->get();
        return view('list',['data'=>$data]);
    }

    public function destroy($id) {
        DB::delete('delete from user where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/list">Click Here</a> to go back.';
     }
     

     public function login(){
        return view ("login");
    }

    public function registration(){
        return view ("auth.Registration");
    }
    
    public function registerUser(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $user= new user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->U_city=$request->U_city;
        $user->U_state=$request->U_state;
        $res=$user->save();
        if('$res'){
            return back()->with('success, you have registered successfuly');
            
        }else{
            return back()->with('fail, sothething wrong');
        }

    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=user::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.' );
        }
    }


    public function dashboard()
    {
        $data= array();
        if(Session::has('loginId')){
            $data=user::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }

    public function header()
    {
        $data= array();
        if(Session::has('loginId')){
            $data=user::where('id','=',Session::get('loginId'))->first();
        }
        return view('ah',compact('data'));
    }


    public function logout()
    {
        if(Session::has('lohinId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function destroyuser(Request $request){
        $request->session()->forget(['email','name','loginId']);
        return redirect('login');
    }

}

