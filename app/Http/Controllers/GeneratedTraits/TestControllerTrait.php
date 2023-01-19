<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar432441379;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar432441379.index');
    }

    public function create()
    {
        return view('admin.testcar432441379.create');
    }

    public function edit(TestCar432441379 $testcar432441379)
    {
        return view('admin.testcar432441379.edit', compact('testcar432441379'));
    }

    public function show(TestCar432441379 $testcar432441379)
    {
        return view('admin.testcar432441379.show', compact('testcar432441379'));
    }
}
