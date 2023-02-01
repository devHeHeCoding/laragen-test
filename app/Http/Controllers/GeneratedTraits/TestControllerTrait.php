<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1614758844;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1614758844.index');
    }

    public function create()
    {
        return view('admin.testcar1614758844.create');
    }

    public function edit(TestCar1614758844 $testCar1614758844)
    {
        return view('admin.testcar1614758844.edit', compact('testCar1614758844'));
    }

    public function show(TestCar1614758844 $testCar1614758844)
    {
        return view('admin.testcar1614758844.show', compact('testCar1614758844'));
    }
}
