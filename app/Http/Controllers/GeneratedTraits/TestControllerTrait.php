<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar172364925;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar172364925.index');
    }

    public function create()
    {
        return view('admin.testcar172364925.create');
    }

    public function edit(TestCar172364925 $testCar172364925)
    {
        return view('admin.testcar172364925.edit', compact('testCar172364925'));
    }

    public function show(TestCar172364925 $testCar172364925)
    {
        return view('admin.testcar172364925.show', compact('testCar172364925'));
    }
}
