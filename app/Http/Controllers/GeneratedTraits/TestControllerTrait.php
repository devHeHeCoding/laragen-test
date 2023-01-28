<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2041988623;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2041988623.index');
    }

    public function create()
    {
        return view('admin.testcar2041988623.create');
    }

    public function edit(TestCar2041988623 $testCar2041988623)
    {
        return view('admin.testcar2041988623.edit', compact('testCar2041988623'));
    }

    public function show(TestCar2041988623 $testCar2041988623)
    {
        return view('admin.testcar2041988623.show', compact('testCar2041988623'));
    }
}
