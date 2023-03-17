<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1556945516;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1556945516.index');
    }

    public function create()
    {
        return view('admin.testcar1556945516.create');
    }

    public function edit(TestCar1556945516 $testCar1556945516)
    {
        return view('admin.testcar1556945516.edit', compact('testCar1556945516'));
    }

    public function show(TestCar1556945516 $testCar1556945516)
    {
        return view('admin.testcar1556945516.show', compact('testCar1556945516'));
    }
}
