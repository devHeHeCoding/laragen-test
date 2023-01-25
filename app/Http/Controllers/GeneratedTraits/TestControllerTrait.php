<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar912256798;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar912256798.index');
    }

    public function create()
    {
        return view('admin.testcar912256798.create');
    }

    public function edit(TestCar912256798 $testCar912256798)
    {
        return view('admin.testcar912256798.edit', compact('testCar912256798'));
    }

    public function show(TestCar912256798 $testCar912256798)
    {
        return view('admin.testcar912256798.show', compact('testCar912256798'));
    }
}
