<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccController extends Controller
{
    public function accaddcustpage() {
      
        return view('/accountant/accaddcustp');
    }

    public function accaddcust (Request $request) {
        $incomingFields = $request->validate([
            'customername'=> 'required',
            'customeraddress'=>'required',
            'customeremail'=> 'required',
            'customerphone'=> 'required'
        ]);
        Customer::create($incomingFields);
        return redirect('/accountant/accaddcustp');

    }

    public function accaddcontpage() {
      
        return view('/accountant/accaddcontp');
    }

    public function addcontract (Request $request) {
        $incomingFields = $request->validate([
            'roomname'=> 'required',
            'officename'=>'required',
            'customername'=> 'required',
            'contractnumber'=> 'required',
            'contractduration'=> 'required',
            'contractstarthour'=> 'required',
            'contractendhour'=> 'required',
        ]);
        $contract=Contract::create($incomingFields);
        if($request->hasFile('avatar')){
        $path = $request->file('avatar')->store('/public/avatars');
        $contract->avatar=$path;
        $contract->save();
        }
        return redirect('/accountant/accaddcontp');
    }
}
