<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1387683857;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1387683857.index');
    }

    public function create()
    {
        return view('admin.testcar1387683857.create');
    }

    public function edit(TestCar1387683857 $testCar1387683857)
    {
        return view('admin.testcar1387683857.edit', compact('testCar1387683857'));
    }

    public function show(TestCar1387683857 $testCar1387683857)
    {
        return view('admin.testcar1387683857.show', compact('testCar1387683857'));
    }
}
