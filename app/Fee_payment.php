<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

class Fee_payment extends Model
{
    public function getAll()
    {
        $modules = DB::select('select * from class_module NATURAL JOIN takes ');
        return $modules;
    }

    public function savePayment(Request $request)
    {

        $paid_amount=$request['paid_amt'];
        $takes_id=$request['takes_id'];

        DB::statement("INSERT INTO fee_payment (paid_amt,takes_id) VALUES('$paid_amount','$takes_id')");

    }
}
