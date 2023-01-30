<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar898297423;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar898297423.index');
    }

    public function create()
    {
        return view('admin.testcar898297423.create');
    }

    public function edit(TestCar898297423 $testCar898297423)
    {
        return view('admin.testcar898297423.edit', compact('testCar898297423'));
    }

    public function show(TestCar898297423 $testCar898297423)
    {
        return view('admin.testcar898297423.show', compact('testCar898297423'));
    }
}
