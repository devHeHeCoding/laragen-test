<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1754918598;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1754918598.index');
    }

    public function create()
    {
        return view('admin.testcar1754918598.create');
    }

    public function edit(TestCar1754918598 $testcar1754918598)
    {
        return view('admin.testcar1754918598.edit', compact('testcar1754918598'));
    }

    public function show(TestCar1754918598 $testcar1754918598)
    {
        return view('admin.testcar1754918598.show', compact('testcar1754918598'));
    }
}
