<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar3524894.index');
    }

    public function create()
    {
        return view('admin.testcar3524894.create');
    }

    public function edit(TestCar3524894 $testcar3524894)
    {
        return view('admin.testcar3524894.edit', compact('testcar3524894'));
    }

    public function show(TestCar3524894 $testcar3524894)
    {
        return view('admin.testcar3524894.show', compact('testcar3524894'));
    }
}
