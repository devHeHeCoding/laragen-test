<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1788354338;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1788354338.index');
    }

    public function create()
    {
        return view('admin.testcar1788354338.create');
    }

    public function edit(TestCar1788354338 $testCar1788354338)
    {
        return view('admin.testcar1788354338.edit', compact('testCar1788354338'));
    }

    public function show(TestCar1788354338 $testCar1788354338)
    {
        return view('admin.testcar1788354338.show', compact('testCar1788354338'));
    }
}
