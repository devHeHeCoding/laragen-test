<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1975194882;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1975194882.index');
    }

    public function create()
    {
        return view('admin.testcar1975194882.create');
    }

    public function edit(TestCar1975194882 $testCar1975194882)
    {
        return view('admin.testcar1975194882.edit', compact('testCar1975194882'));
    }

    public function show(TestCar1975194882 $testCar1975194882)
    {
        return view('admin.testcar1975194882.show', compact('testCar1975194882'));
    }
}
