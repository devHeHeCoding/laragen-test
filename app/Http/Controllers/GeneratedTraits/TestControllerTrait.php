<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar177062726;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar177062726.index');
    }

    public function create()
    {
        return view('admin.testcar177062726.create');
    }

    public function edit(TestCar177062726 $testCar177062726)
    {
        return view('admin.testcar177062726.edit', compact('testCar177062726'));
    }

    public function show(TestCar177062726 $testCar177062726)
    {
        return view('admin.testcar177062726.show', compact('testCar177062726'));
    }
}
