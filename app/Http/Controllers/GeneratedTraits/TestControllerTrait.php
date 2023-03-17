<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar225106365;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar225106365.index');
    }

    public function create()
    {
        return view('admin.testcar225106365.create');
    }

    public function edit(TestCar225106365 $testCar225106365)
    {
        return view('admin.testcar225106365.edit', compact('testCar225106365'));
    }

    public function show(TestCar225106365 $testCar225106365)
    {
        return view('admin.testcar225106365.show', compact('testCar225106365'));
    }
}
