<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2081218688.index');
    }

    public function create()
    {
        return view('admin.testcar2081218688.create');
    }

    public function edit(TestCar2081218688 $testcar2081218688)
    {
        return view('admin.testcar2081218688.edit', compact('testcar2081218688'));
    }

    public function show(TestCar2081218688 $testcar2081218688)
    {
        return view('admin.testcar2081218688.show', compact('testcar2081218688'));
    }
}
