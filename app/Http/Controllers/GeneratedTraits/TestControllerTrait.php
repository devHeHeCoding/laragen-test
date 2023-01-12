<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar643697074.index');
    }

    public function create()
    {
        return view('admin.testcar643697074.create');
    }

    public function edit(TestCar643697074 $testcar643697074)
    {
        return view('admin.testcar643697074.edit', compact('testcar643697074'));
    }

    public function show(TestCar643697074 $testcar643697074)
    {
        return view('admin.testcar643697074.show', compact('testcar643697074'));
    }
}
