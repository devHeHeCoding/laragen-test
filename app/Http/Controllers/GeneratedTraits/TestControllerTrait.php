<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1189261820;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1189261820.index');
    }

    public function create()
    {
        return view('admin.testcar1189261820.create');
    }

    public function edit(TestCar1189261820 $testCar1189261820)
    {
        return view('admin.testcar1189261820.edit', compact('testCar1189261820'));
    }

    public function show(TestCar1189261820 $testCar1189261820)
    {
        return view('admin.testcar1189261820.show', compact('testCar1189261820'));
    }
}
