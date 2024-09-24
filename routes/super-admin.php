<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdmin\ManageController;
use App\Http\Controllers\SuperAdmin\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::middleware("check.guard:super-admin")->controller(ManageController::class)
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
    Route::get("/create-organization", "create")->name("create-organization");
    Route::get("/show-organization/{id}", "show")->name("show.organization");
    Route::post("/create-organization", "createOrganization")->name("create.organization");
    Route::get("/edit-organization/{id}", "editOrganization")->name("edit-organization");
    Route::put("/update-organization/{id}", "updateOrganization")->name("update.organization");
});
