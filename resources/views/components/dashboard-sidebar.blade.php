@if (App\Helpers\Authentication::getGuard() == 'super-admin')
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmins" aria-expanded="true"
        aria-controls="collapseAdmins">
        <i class="fas fa-fw fa-cog"></i>
        <span>Admins</span>
    </a>
    <div id="collapseAdmins" class="collapse" aria-labelledby="headingAdmins" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admins Section:</h6>
            <a class="collapse-item" href="{{ route('all.admins') }}">All Admins</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrganizations"
        aria-expanded="true" aria-controls="collapseOrganizations">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Organizations</span>
    </a>
    <div id="collapseOrganizations" class="collapse" aria-labelledby="headingOrganizations" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Organizations</h6>
            <a href="{{ route('all.organizations') }}" class="collapse-item">All Organizations</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCooperation"
        aria-expanded="true" aria-controls="collapseCooperation">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Cooperations</span>
    </a>
    <div id="collapseCooperation" class="collapse" aria-labelledby="headingCooperation" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cooperations</h6>
            <a href="{{ route('all.cooperations') }}" class="collapse-item">All Cooperations</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlans"
        aria-expanded="true" aria-controls="collapsePlans">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Plans</span>
    </a>
    <div id="collapsePlans" class="collapse" aria-labelledby="headingPlans" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Plans</h6>
            <a href="{{route('all.plans')}}" class="collapse-item">All Plans</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscribtions"
        aria-expanded="true" aria-controls="collapseSubscribtions">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Subscriptions</span>
    </a>
    <div id="collapseSubscribtions" class="collapse" aria-labelledby="headingPlans" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Subscriptions</h6>
            <a href="{{route('all.subscriptions')}}" class="collapse-item">All Subscriptions</a>
        </div>
    </div>
</li>

@elseif (App\Helpers\Authentication::getGuard() == 'admin')
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployers"
        aria-expanded="true" aria-controls="collapseEmployers">
        <i class="fas fa-fw fa-cog"></i>
        <span>Employees</span>
    </a>
    <div id="collapseEmployers" class="collapse" aria-labelledby="headingEmployers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Employees Section:</h6>
            <a class="collapse-item" href="{{ route('all.employees') }}">All Employees</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlans"
        aria-expanded="true" aria-controls="collapsePlans">
        <i class="fas fa-fw fa-cog"></i>
        <span>Plans</span>
    </a>
    <div id="collapsePlans" class="collapse" aria-labelledby="headingPlans" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Plans Section:</h6>
            <a class="collapse-item" href="{{route('plans')}}">All Plans</a>
            <a class="collapse-item" href="{{route('show_plan')}}">Your Plan</a>
        </div>
    </div>
</li>
@endif
