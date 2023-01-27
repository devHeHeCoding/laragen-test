<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar361980884;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar361980884.index');
    }

    public function create()
    {
        return view('admin.testcar361980884.create');
    }

    public function edit(TestCar361980884 $testCar361980884)
    {
        return view('admin.testcar361980884.edit', compact('testCar361980884'));
    }

    public function show(TestCar361980884 $testCar361980884)
    {
        return view('admin.testcar361980884.show', compact('testCar361980884'));
    }
}
