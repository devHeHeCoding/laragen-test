<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1064489173.index');
    }

    public function create()
    {
        return view('admin.testcar1064489173.create');
    }

    public function edit(TestCar1064489173 $testcar1064489173)
    {
        return view('admin.testcar1064489173.edit', compact('testcar1064489173'));
    }

    public function show(TestCar1064489173 $testcar1064489173)
    {
        return view('admin.testcar1064489173.show', compact('testcar1064489173'));
    }
}
