<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar847894616;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar847894616.index');
    }

    public function create()
    {
        return view('admin.testcar847894616.create');
    }

    public function edit(TestCar847894616 $testCar847894616)
    {
        return view('admin.testcar847894616.edit', compact('testCar847894616'));
    }

    public function show(TestCar847894616 $testCar847894616)
    {
        return view('admin.testcar847894616.show', compact('testCar847894616'));
    }
}
