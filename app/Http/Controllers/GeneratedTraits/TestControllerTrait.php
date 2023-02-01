<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1925979731;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1925979731.index');
    }

    public function create()
    {
        return view('admin.testcar1925979731.create');
    }

    public function edit(TestCar1925979731 $testCar1925979731)
    {
        return view('admin.testcar1925979731.edit', compact('testCar1925979731'));
    }

    public function show(TestCar1925979731 $testCar1925979731)
    {
        return view('admin.testcar1925979731.show', compact('testCar1925979731'));
    }
}
