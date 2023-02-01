<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2088279885;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2088279885.index');
    }

    public function create()
    {
        return view('admin.testcar2088279885.create');
    }

    public function edit(TestCar2088279885 $testCar2088279885)
    {
        return view('admin.testcar2088279885.edit', compact('testCar2088279885'));
    }

    public function show(TestCar2088279885 $testCar2088279885)
    {
        return view('admin.testcar2088279885.show', compact('testCar2088279885'));
    }
}
