<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar473841191;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar473841191.index');
    }

    public function create()
    {
        return view('admin.testcar473841191.create');
    }

    public function edit(TestCar473841191 $testCar473841191)
    {
        return view('admin.testcar473841191.edit', compact('testCar473841191'));
    }

    public function show(TestCar473841191 $testCar473841191)
    {
        return view('admin.testcar473841191.show', compact('testCar473841191'));
    }
}
