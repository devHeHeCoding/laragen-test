<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1199394807.index');
    }

    public function create()
    {
        return view('admin.testcar1199394807.create');
    }

    public function edit(TestCar1199394807 $testcar1199394807)
    {
        return view('admin.testcar1199394807.edit', compact('testcar1199394807'));
    }

    public function show(TestCar1199394807 $testcar1199394807)
    {
        return view('admin.testcar1199394807.show', compact('testcar1199394807'));
    }
}
