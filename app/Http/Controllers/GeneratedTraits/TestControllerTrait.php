<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1068148824.index');
    }

    public function create()
    {
        return view('admin.testcar1068148824.create');
    }

    public function edit(TestCar1068148824 $testcar1068148824)
    {
        return view('admin.testcar1068148824.edit', compact('testcar1068148824'));
    }

    public function show(TestCar1068148824 $testcar1068148824)
    {
        return view('admin.testcar1068148824.show', compact('testcar1068148824'));
    }
}
