<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class ManageSubscriPtionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with(['admin','plan'])
        ->latest()->paginate(5);
        return view('dashboard.super-admin.subscriptions.index', compact('subscriptions'));
    }
    public function create()
    {
        $plans = Plan::where('status','active')->get();
        $admins = Admin::where('status','active')->get();
        return view("dashboard.super-admin.subscriptions.create", compact("plans","admins"));
    }
    public function store(Request $request)
    {
        Subscription::create([
            'admin_id' => $request->id,
            'plan_id' => $request->plan_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status
        ]);
        return redirect()->route("all.subscriptions")->with('success','Subscription created successfully');
    }
    public function show($number)
    {
        $subscription = Subscription::with(['admin','plan'])
        ->where('number',$number)->first();
        return view('dashboard.super-admin.subscriptions.show', compact('subscription'));
    }
    public function edit($id)
    {
        $plan = Subscription::findOrFail($id);
        return view('dashboard.super-admin.subscriptions.edit', compact('plan'));
    }
    public function update(Request $request, $id)
    {
        $plan = Subscription::findOrFail($id);
        $plan->update($request->all());
        return redirect()->route('all.subscriptions')->with('success','Subscription updated successfully');
    }
    public function destroy($id)
    {
        Subscription::findOrFail($id)->delete();
        return redirect()->route('all.subscriptions')->with('success','Subscription deleted successfully');
    }
}
