<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1139604965;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1139604965.index');
    }

    public function create()
    {
        return view('admin.testcar1139604965.create');
    }

    public function edit(TestCar1139604965 $testCar1139604965)
    {
        return view('admin.testcar1139604965.edit', compact('testCar1139604965'));
    }

    public function show(TestCar1139604965 $testCar1139604965)
    {
        return view('admin.testcar1139604965.show', compact('testCar1139604965'));
    }
}
