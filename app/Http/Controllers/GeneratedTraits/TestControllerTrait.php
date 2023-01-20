<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1509961157;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1509961157.index');
    }

    public function create()
    {
        return view('admin.testcar1509961157.create');
    }

    public function edit(TestCar1509961157 $testCar1509961157)
    {
        return view('admin.testcar1509961157.edit', compact('testCar1509961157'));
    }

    public function show(TestCar1509961157 $testCar1509961157)
    {
        return view('admin.testcar1509961157.show', compact('testCar1509961157'));
    }
}
