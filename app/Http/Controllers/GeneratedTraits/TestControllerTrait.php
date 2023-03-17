<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1157138218;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1157138218.index');
    }

    public function create()
    {
        return view('admin.testcar1157138218.create');
    }

    public function edit(TestCar1157138218 $testCar1157138218)
    {
        return view('admin.testcar1157138218.edit', compact('testCar1157138218'));
    }

    public function show(TestCar1157138218 $testCar1157138218)
    {
        return view('admin.testcar1157138218.show', compact('testCar1157138218'));
    }
}
