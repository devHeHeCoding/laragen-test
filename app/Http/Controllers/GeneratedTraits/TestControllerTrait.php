<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar335945380.index');
    }

    public function create()
    {
        return view('admin.testcar335945380.create');
    }

    public function edit(TestCar335945380 $testcar335945380)
    {
        return view('admin.testcar335945380.edit', compact('testcar335945380'));
    }

    public function show(TestCar335945380 $testcar335945380)
    {
        return view('admin.testcar335945380.show', compact('testcar335945380'));
    }
}
