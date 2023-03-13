<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1071998173;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1071998173.index');
    }

    public function create()
    {
        return view('admin.testcar1071998173.create');
    }

    public function edit(TestCar1071998173 $testCar1071998173)
    {
        return view('admin.testcar1071998173.edit', compact('testCar1071998173'));
    }

    public function show(TestCar1071998173 $testCar1071998173)
    {
        return view('admin.testcar1071998173.show', compact('testCar1071998173'));
    }
}
