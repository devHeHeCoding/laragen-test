<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar597321278.index');
    }

    public function create()
    {
        return view('admin.testcar597321278.create');
    }

    public function edit(TestCar597321278 $testcar597321278)
    {
        return view('admin.testcar597321278.edit', compact('testcar597321278'));
    }

    public function show(TestCar597321278 $testcar597321278)
    {
        return view('admin.testcar597321278.show', compact('testcar597321278'));
    }
}
