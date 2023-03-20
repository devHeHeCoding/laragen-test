<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1590696408;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1590696408.index');
    }

    public function create()
    {
        return view('admin.testcar1590696408.create');
    }

    public function edit(TestCar1590696408 $testCar1590696408)
    {
        return view('admin.testcar1590696408.edit', compact('testCar1590696408'));
    }

    public function show(TestCar1590696408 $testCar1590696408)
    {
        return view('admin.testcar1590696408.show', compact('testCar1590696408'));
    }
}
