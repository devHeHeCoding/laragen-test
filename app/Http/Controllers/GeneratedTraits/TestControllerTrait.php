<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1424310117;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1424310117.index');
    }

    public function create()
    {
        return view('admin.testcar1424310117.create');
    }

    public function edit(TestCar1424310117 $testcar1424310117)
    {
        return view('admin.testcar1424310117.edit', compact('testcar1424310117'));
    }

    public function show(TestCar1424310117 $testcar1424310117)
    {
        return view('admin.testcar1424310117.show', compact('testcar1424310117'));
    }
}
