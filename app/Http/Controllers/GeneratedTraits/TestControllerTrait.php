<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1097222783;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1097222783.index');
    }

    public function create()
    {
        return view('admin.testcar1097222783.create');
    }

    public function edit(TestCar1097222783 $testCar1097222783)
    {
        return view('admin.testcar1097222783.edit', compact('testCar1097222783'));
    }

    public function show(TestCar1097222783 $testCar1097222783)
    {
        return view('admin.testcar1097222783.show', compact('testCar1097222783'));
    }
}
