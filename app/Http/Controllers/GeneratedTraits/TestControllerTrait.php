<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar99188925.index');
    }

    public function create()
    {
        return view('admin.testcar99188925.create');
    }

    public function edit(TestCar99188925 $testcar99188925)
    {
        return view('admin.testcar99188925.edit', compact('testcar99188925'));
    }

    public function show(TestCar99188925 $testcar99188925)
    {
        return view('admin.testcar99188925.show', compact('testcar99188925'));
    }
}
