<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class OrganizationController extends Controller
{
    public function allOrganization()
    {
        $organizations = Organization::with('admin')
        ->withCount('branches')
        ->paginate(5);
        return view('dashboard.super-admin.organizations.index', compact('organizations'));
    }
    public function show($id)
    {
        $organization = Organization::with(['admin','branches'])->findOrFail( $id );
        return view('dashboard.super-admin.organizations.show', compact('organization'));
    }
    public function create()
    {
        return view('dashboard.super-admin.organizations.create');
    }
    public function createOrganization(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if (! $admin) {
            return redirect()->back()->with('error','admin not found');
        }
        if ($admin->organization)
        {
            return back()->with('error','Admin already has an organization');
        }
        $org =Organization::create([
            'name' => $request->name,
            'admin_id' => $admin->id,
            'status' => $request->status,
        ]);
        foreach ($request->braches as $branch) {
            $org->branches()->create([
                'name' => $branch,
                'organization_id' => $org->id,
            ]);
        }
        return redirect()->route('all.organizations')->with('success','Organization created successfully');
    }
    public function deleteOrganization($id)
    {
        Organization::findOrFail($id)->delete();
        return redirect()->route('all.organizations')->with('success','Organization deleted successfully');
    }
}
