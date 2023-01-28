<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar540468406;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar540468406.index');
    }

    public function create()
    {
        return view('admin.testcar540468406.create');
    }

    public function edit(TestCar540468406 $testCar540468406)
    {
        return view('admin.testcar540468406.edit', compact('testCar540468406'));
    }

    public function show(TestCar540468406 $testCar540468406)
    {
        return view('admin.testcar540468406.show', compact('testCar540468406'));
    }
}
