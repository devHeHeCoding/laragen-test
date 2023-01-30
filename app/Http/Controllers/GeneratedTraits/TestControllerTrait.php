<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2051683754;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2051683754.index');
    }

    public function create()
    {
        return view('admin.testcar2051683754.create');
    }

    public function edit(TestCar2051683754 $testCar2051683754)
    {
        return view('admin.testcar2051683754.edit', compact('testCar2051683754'));
    }

    public function show(TestCar2051683754 $testCar2051683754)
    {
        return view('admin.testcar2051683754.show', compact('testCar2051683754'));
    }
}
