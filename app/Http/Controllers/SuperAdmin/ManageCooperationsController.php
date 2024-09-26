<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cooperate;
use Illuminate\Http\Request;

class ManageCooperationsController extends Controller
{
    public function index()
    {
        $cooperations = Cooperate::with('admin')
        ->paginate(5);
        return view('dashboard.super-admin.cooperates.index', compact('cooperations'));
    }
    public function show($id)
    {
        $cooperation = Cooperate::with('admin')->findOrFail( $id );
        return view('dashboard.super-admin.cooperates.show', compact('cooperation'));
    }
    public function create()
    {
        return view('dashboard.super-admin.cooperates.create');
    }
    public function store(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if (! $admin) {
            return redirect()->back()->with('error','admin not found');
        }
        if ($admin->cooperations)
        {
            return back()->with('error','Admin already has an cooperation');
        }
        $coop =Cooperate::create([
            'name' => $request->name,
            'admin_id' => $admin->id,
        ]);
        return redirect()->route('all.cooperations')->with('success','cooperation created successfully');
    }
    public function edit($id)
    {
        $coop = Cooperate::findOrFail( $id );
        return view('dashboard.super-admin.cooperates.edit', compact('coop'));
    }
    public function update(Request $request, $id)
    {
        $admin = Admin::where('email', $request->email)->first();
        if (! $admin)
        {
            return redirect()->back()->with('error','Admin not found');
        }
        $coop = Cooperate::findOrFail( $id );
        $coop->admin_id = $admin->id;
        $coop->name = $request->name;
        $coop->status = $request->status;
        $coop->save();
        return redirect()->route('all.cooperations')->with('success','cooperation updated successfully');
    }
    public function destroy($id)
    {
        Cooperate::findOrFail($id)->delete();
        return redirect()->route('all.cooperations')->with('success','cooperation deleted successfully');
    }
}
