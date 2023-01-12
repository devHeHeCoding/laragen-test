<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar250149536.index');
    }

    public function create()
    {
        return view('admin.testcar250149536.create');
    }

    public function edit(TestCar250149536 $testcar250149536)
    {
        return view('admin.testcar250149536.edit', compact('testcar250149536'));
    }

    public function show(TestCar250149536 $testcar250149536)
    {
        return view('admin.testcar250149536.show', compact('testcar250149536'));
    }
}
