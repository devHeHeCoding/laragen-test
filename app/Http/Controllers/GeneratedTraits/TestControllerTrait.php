<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1933098508.index');
    }

    public function create()
    {
        return view('admin.testcar1933098508.create');
    }

    public function edit(TestCar1933098508 $testcar1933098508)
    {
        return view('admin.testcar1933098508.edit', compact('testcar1933098508'));
    }

    public function show(TestCar1933098508 $testcar1933098508)
    {
        return view('admin.testcar1933098508.show', compact('testcar1933098508'));
    }
}
