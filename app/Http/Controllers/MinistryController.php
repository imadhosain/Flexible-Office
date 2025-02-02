<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Office;
use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    public function M_rooms() {
        $room = Room::all();
                       return view('/ministry/ministryrooms', compact('room'));   
            }

    public function M_offices() {
        $office = Office::all();
        return view('/ministry/ministryoffices', compact('office'));
    }

    public function M_contracts() {
        $contract = Contract::all();
        return view('/ministry/ministrycontracts', compact('contract'));
    }
    public function M_customers() {
        $customer = Customer::all();
        return view('/ministry/ministrycustomers', compact('customer'));
    }
}
