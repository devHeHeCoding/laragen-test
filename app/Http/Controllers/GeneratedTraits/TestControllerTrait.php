<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1852098213;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1852098213.index');
    }

    public function create()
    {
        return view('admin.testcar1852098213.create');
    }

    public function edit(TestCar1852098213 $testCar1852098213)
    {
        return view('admin.testcar1852098213.edit', compact('testCar1852098213'));
    }

    public function show(TestCar1852098213 $testCar1852098213)
    {
        return view('admin.testcar1852098213.show', compact('testCar1852098213'));
    }
}
