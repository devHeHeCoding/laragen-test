<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1906489997;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1906489997.index');
    }

    public function create()
    {
        return view('admin.testcar1906489997.create');
    }

    public function edit(TestCar1906489997 $testCar1906489997)
    {
        return view('admin.testcar1906489997.edit', compact('testCar1906489997'));
    }

    public function show(TestCar1906489997 $testCar1906489997)
    {
        return view('admin.testcar1906489997.show', compact('testCar1906489997'));
    }
}
