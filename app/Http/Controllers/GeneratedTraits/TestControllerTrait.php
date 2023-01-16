<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar642865241;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar642865241.index');
    }

    public function create()
    {
        return view('admin.testcar642865241.create');
    }

    public function edit(TestCar642865241 $testcar642865241)
    {
        return view('admin.testcar642865241.edit', compact('testcar642865241'));
    }

    public function show(TestCar642865241 $testcar642865241)
    {
        return view('admin.testcar642865241.show', compact('testcar642865241'));
    }
}
