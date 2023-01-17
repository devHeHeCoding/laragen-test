<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1632870290;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1632870290.index');
    }

    public function create()
    {
        return view('admin.testcar1632870290.create');
    }

    public function edit(TestCar1632870290 $testcar1632870290)
    {
        return view('admin.testcar1632870290.edit', compact('testcar1632870290'));
    }

    public function show(TestCar1632870290 $testcar1632870290)
    {
        return view('admin.testcar1632870290.show', compact('testcar1632870290'));
    }
}
