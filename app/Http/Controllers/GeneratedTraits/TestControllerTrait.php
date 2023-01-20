<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1234875917;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1234875917.index');
    }

    public function create()
    {
        return view('admin.testcar1234875917.create');
    }

    public function edit(TestCar1234875917 $testCar1234875917)
    {
        return view('admin.testcar1234875917.edit', compact('testCar1234875917'));
    }

    public function show(TestCar1234875917 $testCar1234875917)
    {
        return view('admin.testcar1234875917.show', compact('testCar1234875917'));
    }
}
