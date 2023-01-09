<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1912775599.index');
    }

    public function create()
    {
        return view('admin.testcar1912775599.create');
    }

    public function edit(TestCar1912775599 $testcar1912775599)
    {
        return view('admin.testcar1912775599.edit', compact('testcar1912775599'));
    }

    public function show(TestCar1912775599 $testcar1912775599)
    {
        return view('admin.testcar1912775599.show', compact('testcar1912775599'));
    }
}
