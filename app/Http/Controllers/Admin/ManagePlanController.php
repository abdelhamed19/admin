<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class ManagePlanController extends Controller
{
    public function index()
    {
        return view("dashboard.admins.plans.all", [
            "plans" => Plan::withCount('subscriptions')->paginate()
        ]);
    }
    public function show($id)
    {
        $plan = Subscription::where('admin_id',Auth::guard('admin')->user()->id)->first();
        return view('dashboard.admins.plans.your-plan.index', [
            'plan'=> $plan
        ]);
    }
}
