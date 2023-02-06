<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1323929317;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1323929317.index');
    }

    public function create()
    {
        return view('admin.testcar1323929317.create');
    }

    public function edit(TestCar1323929317 $testCar1323929317)
    {
        return view('admin.testcar1323929317.edit', compact('testCar1323929317'));
    }

    public function show(TestCar1323929317 $testCar1323929317)
    {
        return view('admin.testcar1323929317.show', compact('testCar1323929317'));
    }
}
