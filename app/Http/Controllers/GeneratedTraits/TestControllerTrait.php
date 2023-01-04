<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar425762237.index');
    }

    public function create()
    {
        return view('admin.testcar425762237.create');
    }

    public function edit(TestCar425762237 $testcar425762237)
    {
        return view('admin.testcar425762237.edit', compact('testcar425762237'));
    }

    public function show(TestCar425762237 $testcar425762237)
    {
        return view('admin.testcar425762237.show', compact('testcar425762237'));
    }
}
