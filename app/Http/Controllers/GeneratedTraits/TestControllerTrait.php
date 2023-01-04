<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar614311431.index');
    }

    public function create()
    {
        return view('admin.testcar614311431.create');
    }

    public function edit(TestCar614311431 $testcar614311431)
    {
        return view('admin.testcar614311431.edit', compact('testcar614311431'));
    }

    public function show(TestCar614311431 $testcar614311431)
    {
        return view('admin.testcar614311431.show', compact('testcar614311431'));
    }
}
