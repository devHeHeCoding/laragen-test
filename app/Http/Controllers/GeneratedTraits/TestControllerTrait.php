<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1748965950;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1748965950.index');
    }

    public function create()
    {
        return view('admin.testcar1748965950.create');
    }

    public function edit(TestCar1748965950 $testCar1748965950)
    {
        return view('admin.testcar1748965950.edit', compact('testCar1748965950'));
    }

    public function show(TestCar1748965950 $testCar1748965950)
    {
        return view('admin.testcar1748965950.show', compact('testCar1748965950'));
    }
}
