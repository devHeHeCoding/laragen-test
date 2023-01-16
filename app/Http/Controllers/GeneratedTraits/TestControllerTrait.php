<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2006926948;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2006926948.index');
    }

    public function create()
    {
        return view('admin.testcar2006926948.create');
    }

    public function edit(TestCar2006926948 $testcar2006926948)
    {
        return view('admin.testcar2006926948.edit', compact('testcar2006926948'));
    }

    public function show(TestCar2006926948 $testcar2006926948)
    {
        return view('admin.testcar2006926948.show', compact('testcar2006926948'));
    }
}
