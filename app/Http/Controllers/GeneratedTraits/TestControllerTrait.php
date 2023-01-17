<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1439794052;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1439794052.index');
    }

    public function create()
    {
        return view('admin.testcar1439794052.create');
    }

    public function edit(TestCar1439794052 $testcar1439794052)
    {
        return view('admin.testcar1439794052.edit', compact('testcar1439794052'));
    }

    public function show(TestCar1439794052 $testcar1439794052)
    {
        return view('admin.testcar1439794052.show', compact('testcar1439794052'));
    }
}
