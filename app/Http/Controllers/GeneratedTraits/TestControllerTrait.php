<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1932055249;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1932055249.index');
    }

    public function create()
    {
        return view('admin.testcar1932055249.create');
    }

    public function edit(TestCar1932055249 $testcar1932055249)
    {
        return view('admin.testcar1932055249.edit', compact('testcar1932055249'));
    }

    public function show(TestCar1932055249 $testcar1932055249)
    {
        return view('admin.testcar1932055249.show', compact('testcar1932055249'));
    }
}
