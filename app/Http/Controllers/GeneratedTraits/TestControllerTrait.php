<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar638446556;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar638446556.index');
    }

    public function create()
    {
        return view('admin.testcar638446556.create');
    }

    public function edit(TestCar638446556 $testCar638446556)
    {
        return view('admin.testcar638446556.edit', compact('testCar638446556'));
    }

    public function show(TestCar638446556 $testCar638446556)
    {
        return view('admin.testcar638446556.show', compact('testCar638446556'));
    }
}
