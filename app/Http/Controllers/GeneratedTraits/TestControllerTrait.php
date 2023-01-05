<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1689475383.index');
    }

    public function create()
    {
        return view('admin.testcar1689475383.create');
    }

    public function edit(TestCar1689475383 $testcar1689475383)
    {
        return view('admin.testcar1689475383.edit', compact('testcar1689475383'));
    }

    public function show(TestCar1689475383 $testcar1689475383)
    {
        return view('admin.testcar1689475383.show', compact('testcar1689475383'));
    }
}
