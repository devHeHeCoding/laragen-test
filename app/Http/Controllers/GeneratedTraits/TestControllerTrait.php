<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar138184623;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar138184623.index');
    }

    public function create()
    {
        return view('admin.testcar138184623.create');
    }

    public function edit(TestCar138184623 $testCar138184623)
    {
        return view('admin.testcar138184623.edit', compact('testCar138184623'));
    }

    public function show(TestCar138184623 $testCar138184623)
    {
        return view('admin.testcar138184623.show', compact('testCar138184623'));
    }
}
