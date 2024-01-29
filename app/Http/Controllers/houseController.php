<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\house;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class houseController extends Controller
{
    public function addHouse(Request $req)
    {
        $house = new house;
        $house->house_no=$req['house_no'];
        $house->house_city=$req['house_city'];
        $house->house_rent=$req['house_rent'];
        $house->house_image=$req['house_image'];
        $house->save();
        return redirect('list9');
    }

    function house()
    {
        $house=house::all();
        return view('other')->with('house',$house);
    }

    function show()
    {
        $house=house::all();
        return view('house-add')->with('house',$house);
    }


    public function destroy($id) {
        DB::delete('delete from user where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/list">Click Here</a> to go back.';
     }
     
}
