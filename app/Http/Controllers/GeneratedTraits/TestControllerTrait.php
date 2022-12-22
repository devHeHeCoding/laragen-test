<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar807149302.index');
    }

    public function create()
    {
        return view('admin.testcar807149302.create');
    }

    public function edit(TestCar807149302 $testcar807149302)
    {
        return view('admin.testcar807149302.edit', compact('testcar807149302'));
    }

    public function show(TestCar807149302 $testcar807149302)
    {
        return view('admin.testcar807149302.show', compact('testcar807149302'));
    }
}
