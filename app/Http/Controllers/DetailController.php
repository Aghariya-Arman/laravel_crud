<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    //show all data
    public function showDetail()
    {
        // all table
        //  $details = DB::table('details')->paginate(4);
        $details = DB::table('details')->orderByDesc('id')->paginate(4);


        // $details = DB::table('details')
        //     ->whereIn('city', ['chaapi', 'palanpur'])
        //     ->get();

        //where clause id 
        //$details = DB::table('details')->where('id', 4)->get();
        //return $details;

        return view('alldata', ['data' => $details]);
    }

    //show single user where clause
    public function singleuser(string $id)
    {
        $details = DB::table('details')->where('id', $id)->get();
        // $details = DB::table('details')->find($id);

        // return  $details;
        // return view('singleuser', ['details' => $details]);
        return view('singleuser', compact('details'));
    }

    //insert code
    public function insertRecord(DetailsRequest $req)
    {
        $add = DB::table('details')
            ->insert([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age,
                'city' => $req->city,

            ]);
        if ($add) {
            // echo " <h1>Aded succesfully</h1>";
            return redirect()->route('show_user');
        } else {
            echo " <h1>Something wrong </h1>";
        }
    }

    public function updatepage(string $id)
    {
        // $update = DB::table('details')->where('id', $id) ->get();
        $update = DB::table('details')->find($id);
        //return $update;
        return view('updateuser', ['updata' => $update]);
    }

    //update record
    public function updrecord(DetailsRequest $req, $id)
    {

        $uod = DB::table('details')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age,
                'city' => $req->city,
            ]);
        if ($uod) {
            //echo "<h1> successfully Updated</h1>";
            return redirect()->route('show_user');
        } else {
            echo "<h4>something wrong</h4>";
        }
    }

    //delete record
    public function deleterecord(string $id)
    {
        $del = DB::table('details')
            ->where('id', $id)
            ->delete();

        if ($del) {
            return redirect()->route('show_user');
        }
    }
}
