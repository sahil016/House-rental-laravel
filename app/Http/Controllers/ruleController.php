<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rules;

class ruleController extends Controller
{
    function show()
    {
        $data= DB::table('rules')->get();
        return view('D/rule2',['data'=>$data]);
    }

    function show2()
    {
        $data= DB::table('rules')->get();
        return view('m-rule',['data'=>$data]);
    }

    public function store(Request $req)
    {
        $rules=new rules;

        $rules->rules=$req['rules'];
        $rules->save();
        return redirect('/manage-rule');
    }

}
