<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar919668756;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar919668756.index');
    }

    public function create()
    {
        return view('admin.testcar919668756.create');
    }

    public function edit(TestCar919668756 $testcar919668756)
    {
        return view('admin.testcar919668756.edit', compact('testcar919668756'));
    }

    public function show(TestCar919668756 $testcar919668756)
    {
        return view('admin.testcar919668756.show', compact('testcar919668756'));
    }
}
