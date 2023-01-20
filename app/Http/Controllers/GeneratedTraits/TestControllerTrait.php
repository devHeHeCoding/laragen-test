<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar289843917;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar289843917.index');
    }

    public function create()
    {
        return view('admin.testcar289843917.create');
    }

    public function edit(TestCar289843917 $testCar289843917)
    {
        return view('admin.testcar289843917.edit', compact('testCar289843917'));
    }

    public function show(TestCar289843917 $testCar289843917)
    {
        return view('admin.testcar289843917.show', compact('testCar289843917'));
    }
}
