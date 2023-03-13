<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1198457234;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1198457234.index');
    }

    public function create()
    {
        return view('admin.testcar1198457234.create');
    }

    public function edit(TestCar1198457234 $testCar1198457234)
    {
        return view('admin.testcar1198457234.edit', compact('testCar1198457234'));
    }

    public function show(TestCar1198457234 $testCar1198457234)
    {
        return view('admin.testcar1198457234.show', compact('testCar1198457234'));
    }
}
