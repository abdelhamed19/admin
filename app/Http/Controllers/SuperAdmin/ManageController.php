<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    public function allAdmins()
    {
        $admins = Admin::with('organization')->latest()->paginate();
        return view('dashboard.admins.index',compact('admins'));
    }
    public function create()
    {
        return view('dashboard.admins.create');
    }
    public function createAdmin(Request $request)
    {
        $admin = Admin::create($request->all());
        return redirect()->route('all.admins')->with('success','Admin created successfully');
    }
    public function editAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        return view('dashboard.admins.edit',compact('admin'));
    }
    public function updateAdmin(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('all.admins')->with('success','Admin updated successfully');
    }
    public function deleteAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('all.admins')->with('success','Admin deleted successfully');
    }
}
