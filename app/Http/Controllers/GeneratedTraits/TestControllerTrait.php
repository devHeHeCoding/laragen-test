<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1898839695;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1898839695.index');
    }

    public function create()
    {
        return view('admin.testcar1898839695.create');
    }

    public function edit(TestCar1898839695 $testCar1898839695)
    {
        return view('admin.testcar1898839695.edit', compact('testCar1898839695'));
    }

    public function show(TestCar1898839695 $testCar1898839695)
    {
        return view('admin.testcar1898839695.show', compact('testCar1898839695'));
    }
}
