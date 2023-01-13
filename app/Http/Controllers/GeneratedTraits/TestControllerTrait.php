<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1770167685;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1770167685.index');
    }

    public function create()
    {
        return view('admin.testcar1770167685.create');
    }

    public function edit(TestCar1770167685 $testcar1770167685)
    {
        return view('admin.testcar1770167685.edit', compact('testcar1770167685'));
    }

    public function show(TestCar1770167685 $testcar1770167685)
    {
        return view('admin.testcar1770167685.show', compact('testcar1770167685'));
    }
}
