<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar550534814;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar550534814.index');
    }

    public function create()
    {
        return view('admin.testcar550534814.create');
    }

    public function edit(TestCar550534814 $testCar550534814)
    {
        return view('admin.testcar550534814.edit', compact('testCar550534814'));
    }

    public function show(TestCar550534814 $testCar550534814)
    {
        return view('admin.testcar550534814.show', compact('testCar550534814'));
    }
}
