<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1546476527;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1546476527.index');
    }

    public function create()
    {
        return view('admin.testcar1546476527.create');
    }

    public function edit(TestCar1546476527 $testCar1546476527)
    {
        return view('admin.testcar1546476527.edit', compact('testCar1546476527'));
    }

    public function show(TestCar1546476527 $testCar1546476527)
    {
        return view('admin.testcar1546476527.show', compact('testCar1546476527'));
    }
}
