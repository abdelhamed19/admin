<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagePlansController extends Controller
{
    public function index()
    {
        $plans = Plan::withCount('subscriptions')
        ->latest()->paginate(5);
        return view('dashboard.super-admin.plans.index', compact('plans'));
    }
    public function create()
    {
        return view("dashboard.super-admin.plans.create");
    }
    public function store(Request $request)
    {
        Plan::create($request->all());
        return redirect()->route("all.plans")->with('success','Plan created successfully');
    }
    public function show($id)
    {
        $plan = Plan::findOrFail($id);
        return view('dashboard.super-admin.plans.show', compact('plan'));
    }
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('dashboard.super-admin.plans.edit', compact('plan'));
    }
    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->update($request->all());
        return redirect()->route('all.plans')->with('success','Plan updated successfully');
    }
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();
        return redirect()->route('all.plans')->with('success','Plan deleted successfully');
    }
}
