<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1095306803;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1095306803.index');
    }

    public function create()
    {
        return view('admin.testcar1095306803.create');
    }

    public function edit(TestCar1095306803 $testCar1095306803)
    {
        return view('admin.testcar1095306803.edit', compact('testCar1095306803'));
    }

    public function show(TestCar1095306803 $testCar1095306803)
    {
        return view('admin.testcar1095306803.show', compact('testCar1095306803'));
    }
}
