<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Office;
use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AddController extends Controller
{
    public function addcustomerpage() {
      
        return view('/admin/addcustomerpage');
    }

    public function addcustomer (Request $request) {
        $incomingFields = $request->validate([
            'customername'=> ['required', Rule::unique('customers','customername')],
            'customeraddress'=>'required',
            'customeremail'=> 'required',
            'customerphone'=> 'required'
        ]);
        Customer::create($incomingFields);
        return redirect('/admin/addcustomerpage');

    }

    public function addroompage() {
      
        return view('/admin/addroompage');
    }

    public function addroom (Request $request) {
        $incomingFields = $request->validate([
            'roomname'=> ['required', Rule::unique('rooms','roomname')],
            'roomtype'=>'required',
        ]);
        Room::create($incomingFields);
        return redirect('/admin/addroompage');
    }

    public function addcontractpage() {
        $room = Room::all();
        $office = Office::all();
        $customer = Customer::all();
        return view('/admin/addcontractpage',['room'=>$room,'office'=>$office, 'customer'=>$customer]);
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
        $imageName = time().'.'.$request->avatar->extension();          
        $contract->avatar=$imageName;
        $request->avatar->move(public_path('avatars'), $imageName);
        $contract->save();
        }
        return redirect('/admin/addcontractpage');
    }

    public function addofficepage() {
      $room = Room::all();
        return view('/admin/addofficepage',['room'=>$room]);
    }

    public function addoffice (Request $request) {
        $incomingFields = $request->validate([
            'roomname'=> 'required',
            'officename'=>['required', Rule::unique('offices','officename')],
        ]);
        Office::create($incomingFields);
        return redirect('/admin/addofficepage');

    }
    public function deletecustomer($id){
        $customer=Customer::where('id',$id)->delete();
        return redirect('/admin/admincustomers');

    }
    public function deleteoffice($id){
        $office=Office::where('id',$id)->delete();
        return redirect('/admin/adminoffices');

    }

    public function deleteroom($id){
        $room=Room::where('id',$id)->delete();
        return redirect('/admin/adminrooms');

    }

    public function deletecontract($id){
        $contract=Contract::where('id',$id)->delete();
        return redirect('/admin/admincontracts');

    }
    public function updateroompage($id) {  
        $room = Room::findOrFail($id);
        return view('/admin/update/updateroompage',compact('room'));
    }

    public function updateroom (Request $request, $id) {
        $room = Room::findOrFail($id); 
        $room->update($request->all());
        return redirect('/admin/adminrooms');
    }
    public function updateofficepage($id) {  
        $office = office::findOrFail($id);
        return view('/admin/update/updateofficepage',compact('office'));
    }

    public function updateoffice (Request $request, $id) {
        $office = Office::findOrFail($id); 
        $office->update($request->all());
        return redirect('/admin/adminoffices');
    }
    public function updatecustomerpage($id) {  
        $customer = Customer::findOrFail($id);
        return view('/admin/update/updatecustomerpage',compact('customer'));
    }

    public function updatecustomer (Request $request, $id) {
        $customer = Customer::findOrFail($id); 
        $customer->update($request->all());
        return redirect('/admin/admincustomers');
    }
    public function updatecontractpage($id) {  
        $contract = Contract::findOrFail($id);
        return view('/admin/update/updatecontractpage',compact('contract'));
    }

    public function updatecontract (Request $request, $id) {
        $contract = Contract::findOrFail($id); 
        $contract->update($request->all());
        return redirect('/admin/admincontracts');
    }

}
