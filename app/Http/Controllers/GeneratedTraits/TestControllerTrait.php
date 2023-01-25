<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1939228506;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1939228506.index');
    }

    public function create()
    {
        return view('admin.testcar1939228506.create');
    }

    public function edit(TestCar1939228506 $testCar1939228506)
    {
        return view('admin.testcar1939228506.edit', compact('testCar1939228506'));
    }

    public function show(TestCar1939228506 $testCar1939228506)
    {
        return view('admin.testcar1939228506.show', compact('testCar1939228506'));
    }
}
