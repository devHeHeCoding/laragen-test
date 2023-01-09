<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar386884279.index');
    }

    public function create()
    {
        return view('admin.testcar386884279.create');
    }

    public function edit(TestCar386884279 $testcar386884279)
    {
        return view('admin.testcar386884279.edit', compact('testcar386884279'));
    }

    public function show(TestCar386884279 $testcar386884279)
    {
        return view('admin.testcar386884279.show', compact('testcar386884279'));
    }
}
