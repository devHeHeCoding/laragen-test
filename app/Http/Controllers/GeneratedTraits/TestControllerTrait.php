<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1896340599;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1896340599.index');
    }

    public function create()
    {
        return view('admin.testcar1896340599.create');
    }

    public function edit(TestCar1896340599 $testcar1896340599)
    {
        return view('admin.testcar1896340599.edit', compact('testcar1896340599'));
    }

    public function show(TestCar1896340599 $testcar1896340599)
    {
        return view('admin.testcar1896340599.show', compact('testcar1896340599'));
    }
}
