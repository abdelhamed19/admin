<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branche;

class ManageEmployeersController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(10);
        return view("dashboard.admins.employees.index",compact("users"));
    }
    public function create(){
        $branches = Branche::all();
        return view("dashboard.admins.employees.create",compact("branches"));
    }
    public function show($id){
        $user = User::find($id);
        return view("dashboard.admins.employees.show",compact("user"));
    }
    public function store(Request $request){
        $branch = Branche::where('id',$request->branche_id)->first();
        User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            'password' => $request->password,
            'branche_id' => $branch->id,
        ]);
        return redirect()->route('all.employees')->with('success','Employee created successfully');
    }
    public function edit($id){
        $employee = User::find($id);
        $branches = Branche::all();
        return view("dashboard.admins.employees.edit",compact("employee","branches"));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('all.employees')->with("success","Employee updated successfully");
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('all.employees')->with("success","Employee deleted successfully");
    }
}
