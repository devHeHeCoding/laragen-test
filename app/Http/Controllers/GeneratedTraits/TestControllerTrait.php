<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1455935900.index');
    }

    public function create()
    {
        return view('admin.testcar1455935900.create');
    }

    public function edit(TestCar1455935900 $testcar1455935900)
    {
        return view('admin.testcar1455935900.edit', compact('testcar1455935900'));
    }

    public function show(TestCar1455935900 $testcar1455935900)
    {
        return view('admin.testcar1455935900.show', compact('testcar1455935900'));
    }
}
