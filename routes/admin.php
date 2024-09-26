<?php

use App\Http\Controllers\Admin\ManageEmployeersController;
use App\Http\Controllers\Admin\ManagePlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware("check.guard:super-admin,admin")
->prefix("admin")
->controller(ManageEmployeersController::class)
->group(function () {
    Route::get("/all-employees", "index")->name("all.employees");
    Route::get("/create-employee", "create")->name("create.employee");
    Route::get("/show-employee/{id}", "show")->name("show.employee");
    Route::post("/create-employee", "store")->name("store.employee");
    Route::get("/edit-employee/{id}", "edit")->name("edit.employee");
    Route::put("/update-employee/{id}", "update")->name("update.employee");
    Route::delete("/delete-employee/{id}", "destroy")->name("delete.employee");
});

Route::middleware("check.guard:super-admin,admin")
->prefix("admin")
->controller(ManagePlanController::class)
->group(function () {
    Route::get("/all-plans", "index")->name("plans");
    Route::get("/show-plan", "show")->name("show_plan");
});
