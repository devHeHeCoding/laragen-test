<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar504939058.index');
    }

    public function create()
    {
        return view('admin.testcar504939058.create');
    }

    public function edit(TestCar504939058 $testcar504939058)
    {
        return view('admin.testcar504939058.edit', compact('testcar504939058'));
    }

    public function show(TestCar504939058 $testcar504939058)
    {
        return view('admin.testcar504939058.show', compact('testcar504939058'));
    }
}
