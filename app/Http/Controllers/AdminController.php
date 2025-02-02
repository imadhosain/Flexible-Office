<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Office;
use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function A_rooms() {
        $room = Room::all();
                       return view('/admin/adminrooms', compact('room'));   
            }

    public function A_offices() {
        $office = Office::all();
        return view('/admin/adminoffices', compact('office'));
    }

    public function A_contracts() {
        $contract = Contract::all();
        return view('/admin/admincontracts', compact('contract'));
    }
    public function A_customers() {
        $customer = Customer::all();
        return view('/admin/admincustomers', compact('customer'));
    }
    public function management() {
        return view('/admin/management');
    }
}
