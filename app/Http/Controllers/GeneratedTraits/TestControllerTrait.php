<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1992385173;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1992385173.index');
    }

    public function create()
    {
        return view('admin.testcar1992385173.create');
    }

    public function edit(TestCar1992385173 $testCar1992385173)
    {
        return view('admin.testcar1992385173.edit', compact('testCar1992385173'));
    }

    public function show(TestCar1992385173 $testCar1992385173)
    {
        return view('admin.testcar1992385173.show', compact('testCar1992385173'));
    }
}
