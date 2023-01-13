<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar512320321.index');
    }

    public function create()
    {
        return view('admin.testcar512320321.create');
    }

    public function edit(TestCar512320321 $testcar512320321)
    {
        return view('admin.testcar512320321.edit', compact('testcar512320321'));
    }

    public function show(TestCar512320321 $testcar512320321)
    {
        return view('admin.testcar512320321.show', compact('testcar512320321'));
    }
}
