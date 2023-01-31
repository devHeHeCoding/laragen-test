<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1230195362;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1230195362.index');
    }

    public function create()
    {
        return view('admin.testcar1230195362.create');
    }

    public function edit(TestCar1230195362 $testCar1230195362)
    {
        return view('admin.testcar1230195362.edit', compact('testCar1230195362'));
    }

    public function show(TestCar1230195362 $testCar1230195362)
    {
        return view('admin.testcar1230195362.show', compact('testCar1230195362'));
    }
}
