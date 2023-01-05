<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar231017210.index');
    }

    public function create()
    {
        return view('admin.testcar231017210.create');
    }

    public function edit(TestCar231017210 $testcar231017210)
    {
        return view('admin.testcar231017210.edit', compact('testcar231017210'));
    }

    public function show(TestCar231017210 $testcar231017210)
    {
        return view('admin.testcar231017210.show', compact('testcar231017210'));
    }
}
