<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1798475003;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1798475003.index');
    }

    public function create()
    {
        return view('admin.testcar1798475003.create');
    }

    public function edit(TestCar1798475003 $testCar1798475003)
    {
        return view('admin.testcar1798475003.edit', compact('testCar1798475003'));
    }

    public function show(TestCar1798475003 $testCar1798475003)
    {
        return view('admin.testcar1798475003.show', compact('testCar1798475003'));
    }
}
