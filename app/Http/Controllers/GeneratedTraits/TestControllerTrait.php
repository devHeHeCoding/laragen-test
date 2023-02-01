<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1677949319;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1677949319.index');
    }

    public function create()
    {
        return view('admin.testcar1677949319.create');
    }

    public function edit(TestCar1677949319 $testCar1677949319)
    {
        return view('admin.testcar1677949319.edit', compact('testCar1677949319'));
    }

    public function show(TestCar1677949319 $testCar1677949319)
    {
        return view('admin.testcar1677949319.show', compact('testCar1677949319'));
    }
}
