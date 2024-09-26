<?php

use App\Http\Controllers\SuperAdmin\ManageAdminsController;
use App\Http\Controllers\SuperAdmin\ManageCooperationsController;
use App\Http\Controllers\SuperAdmin\ManagePlansController;
use App\Http\Controllers\SuperAdmin\ManageSubscriPtionsController;
use App\Http\Controllers\SuperAdmin\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::middleware("check.guard:super-admin")->controller(ManageAdminsController::class)
->group(function () {
    Route::get("/all-admins", "allAdmins")->name("all.admins");
    Route::get("/create-admins", "create")->name("create");
    Route::post("/create-admins", "createAdmin")->name("create.admins");
    Route::get("/edit-admins/{id}", "editAdmin")->name("edit");
    Route::put("/update-admins/{id}", "updateAdmin")->name("update.admins");
    Route::delete("/delete-admins/{id}", "deleteAdmin")->name("delete.admins");
});

Route::middleware("check.guard:super-admin")->controller(OrganizationController::class)
->group(function () {
    Route::get("/all-organizations", "allOrganization")->name("all.organizations");
    Route::get("/create-organization", "create")->name("create.organization");
    Route::get("/show-organization/{id}", "show")->name("show.organization");
    Route::post("/create-organization", "createOrganization")->name("store.organization");
    Route::get("/edit-organization/{id}", "editOrganization")->name("edit.organization");
    Route::put("/update-organization/{id}", "updateOrganization")->name("update.organization");
    Route::delete("/delete-organization/{id}", "deleteOrganization")->name("delete.organization");

});

Route::middleware("check.guard:super-admin")->controller(ManagePlansController::class)
->group(function () {
    Route::get("/all-plans", "index")->name("all.plans");
    Route::get("/create-plan", "create")->name("create.plan");
    Route::get("/show-plan/{id}", "show")->name("show.plan");
    Route::post("/create-plan", "store")->name("store.plan");
    Route::get("/edit-plan/{id}", "edit")->name("edit.plan");
    Route::put("/update-plan/{id}", "update")->name("update.plan");
    Route::delete("/delete-plan/{id}", "destroy")->name("delete.plan");
});

Route::middleware("check.guard:super-admin")->controller(ManageSubscriPtionsController::class)
->group(function () {
    Route::get("/all-subscriptions", "index")->name("all.subscriptions");
    Route::get("/create-subscription", "create")->name("create.subscription");
    Route::get("/show-subscription/{number}", "show")->name("show.subscription");
    Route::post("/create-subscription", "store")->name("store.subscription");
    Route::get("/edit-subscription/{id}", "edit")->name("edit.subscription");
    Route::put("/update-subscription/{id}", "update")->name("update.subscription");
    Route::delete("/delete-subscription/{id}", "destroy")->name("delete.subscription");
});

Route::middleware("check.guard:super-admin")->controller(ManageCooperationsController::class)
->group(function () {
    Route::get("/all-cooperations", "index")->name("all.cooperations");
    Route::get("/create-cooperation", "create")->name("create.cooperation");
    Route::get("/show-cooperation/{number}", "show")->name("show.cooperation");
    Route::post("/create-cooperation", "store")->name("store.cooperation");
    Route::get("/edit-cooperation/{id}", "edit")->name("edit.cooperation");
    Route::put("/update-cooperation/{id}", "update")->name("update.cooperation");
    Route::delete("/delete-cooperation/{id}", "destroy")->name("delete.cooperation");
});
