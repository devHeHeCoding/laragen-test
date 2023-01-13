<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2061013842.index');
    }

    public function create()
    {
        return view('admin.testcar2061013842.create');
    }

    public function edit(TestCar2061013842 $testcar2061013842)
    {
        return view('admin.testcar2061013842.edit', compact('testcar2061013842'));
    }

    public function show(TestCar2061013842 $testcar2061013842)
    {
        return view('admin.testcar2061013842.show', compact('testcar2061013842'));
    }
}
