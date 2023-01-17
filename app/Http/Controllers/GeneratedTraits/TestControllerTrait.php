<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar42821279;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar42821279.index');
    }

    public function create()
    {
        return view('admin.testcar42821279.create');
    }

    public function edit(TestCar42821279 $testcar42821279)
    {
        return view('admin.testcar42821279.edit', compact('testcar42821279'));
    }

    public function show(TestCar42821279 $testcar42821279)
    {
        return view('admin.testcar42821279.show', compact('testcar42821279'));
    }
}
