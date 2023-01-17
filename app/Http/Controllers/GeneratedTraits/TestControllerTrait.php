<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1019581192;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1019581192.index');
    }

    public function create()
    {
        return view('admin.testcar1019581192.create');
    }

    public function edit(TestCar1019581192 $testcar1019581192)
    {
        return view('admin.testcar1019581192.edit', compact('testcar1019581192'));
    }

    public function show(TestCar1019581192 $testcar1019581192)
    {
        return view('admin.testcar1019581192.show', compact('testcar1019581192'));
    }
}
