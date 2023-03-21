<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar369693455;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar369693455.index');
    }

    public function create()
    {
        return view('admin.testcar369693455.create');
    }

    public function edit(TestCar369693455 $testCar369693455)
    {
        return view('admin.testcar369693455.edit', compact('testCar369693455'));
    }

    public function show(TestCar369693455 $testCar369693455)
    {
        return view('admin.testcar369693455.show', compact('testCar369693455'));
    }
}
