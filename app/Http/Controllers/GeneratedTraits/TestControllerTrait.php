<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1553373779;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1553373779.index');
    }

    public function create()
    {
        return view('admin.testcar1553373779.create');
    }

    public function edit(TestCar1553373779 $testcar1553373779)
    {
        return view('admin.testcar1553373779.edit', compact('testcar1553373779'));
    }

    public function show(TestCar1553373779 $testcar1553373779)
    {
        return view('admin.testcar1553373779.show', compact('testcar1553373779'));
    }
}
