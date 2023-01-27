<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1500724160;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1500724160.index');
    }

    public function create()
    {
        return view('admin.testcar1500724160.create');
    }

    public function edit(TestCar1500724160 $testCar1500724160)
    {
        return view('admin.testcar1500724160.edit', compact('testCar1500724160'));
    }

    public function show(TestCar1500724160 $testCar1500724160)
    {
        return view('admin.testcar1500724160.show', compact('testCar1500724160'));
    }
}
