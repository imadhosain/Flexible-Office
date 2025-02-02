<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ContractExport;
use App\Imports\ContractImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contract;

class EXController extends Controller
{
    public function index()
    {
        $contracts = Contract::get();
        return view('contracts', compact('contracts'));
    }        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ContractExport, 'contracts.xlsx');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ContractImport,request()->file('file'));
        return back();
    }
}
