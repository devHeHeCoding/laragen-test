<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar947429955;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar947429955.index');
    }

    public function create()
    {
        return view('admin.testcar947429955.create');
    }

    public function edit(TestCar947429955 $testCar947429955)
    {
        return view('admin.testcar947429955.edit', compact('testCar947429955'));
    }

    public function show(TestCar947429955 $testCar947429955)
    {
        return view('admin.testcar947429955.show', compact('testCar947429955'));
    }
}
