<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar319591901;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar319591901.index');
    }

    public function create()
    {
        return view('admin.testcar319591901.create');
    }

    public function edit(TestCar319591901 $testCar319591901)
    {
        return view('admin.testcar319591901.edit', compact('testCar319591901'));
    }

    public function show(TestCar319591901 $testCar319591901)
    {
        return view('admin.testcar319591901.show', compact('testCar319591901'));
    }
}
