<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar239793807;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar239793807.index');
    }

    public function create()
    {
        return view('admin.testcar239793807.create');
    }

    public function edit(TestCar239793807 $testCar239793807)
    {
        return view('admin.testcar239793807.edit', compact('testCar239793807'));
    }

    public function show(TestCar239793807 $testCar239793807)
    {
        return view('admin.testcar239793807.show', compact('testCar239793807'));
    }
}
