<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2116097343;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2116097343.index');
    }

    public function create()
    {
        return view('admin.testcar2116097343.create');
    }

    public function edit(TestCar2116097343 $testCar2116097343)
    {
        return view('admin.testcar2116097343.edit', compact('testCar2116097343'));
    }

    public function show(TestCar2116097343 $testCar2116097343)
    {
        return view('admin.testcar2116097343.show', compact('testCar2116097343'));
    }
}
