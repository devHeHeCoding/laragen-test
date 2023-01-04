<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1236519354.index');
    }

    public function create()
    {
        return view('admin.testcar1236519354.create');
    }

    public function edit(TestCar1236519354 $testcar1236519354)
    {
        return view('admin.testcar1236519354.edit', compact('testcar1236519354'));
    }

    public function show(TestCar1236519354 $testcar1236519354)
    {
        return view('admin.testcar1236519354.show', compact('testcar1236519354'));
    }
}
