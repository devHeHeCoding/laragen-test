<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1302454223;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1302454223.index');
    }

    public function create()
    {
        return view('admin.testcar1302454223.create');
    }

    public function edit(TestCar1302454223 $testCar1302454223)
    {
        return view('admin.testcar1302454223.edit', compact('testCar1302454223'));
    }

    public function show(TestCar1302454223 $testCar1302454223)
    {
        return view('admin.testcar1302454223.show', compact('testCar1302454223'));
    }
}
