<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar99630450;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar99630450.index');
    }

    public function create()
    {
        return view('admin.testcar99630450.create');
    }

    public function edit(TestCar99630450 $testCar99630450)
    {
        return view('admin.testcar99630450.edit', compact('testCar99630450'));
    }

    public function show(TestCar99630450 $testCar99630450)
    {
        return view('admin.testcar99630450.show', compact('testCar99630450'));
    }
}
