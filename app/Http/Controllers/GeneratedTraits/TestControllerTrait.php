<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1621691636;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1621691636.index');
    }

    public function create()
    {
        return view('admin.testcar1621691636.create');
    }

    public function edit(TestCar1621691636 $testCar1621691636)
    {
        return view('admin.testcar1621691636.edit', compact('testCar1621691636'));
    }

    public function show(TestCar1621691636 $testCar1621691636)
    {
        return view('admin.testcar1621691636.show', compact('testCar1621691636'));
    }
}
