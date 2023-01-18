<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar749866031;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar749866031.index');
    }

    public function create()
    {
        return view('admin.testcar749866031.create');
    }

    public function edit(TestCar749866031 $testcar749866031)
    {
        return view('admin.testcar749866031.edit', compact('testcar749866031'));
    }

    public function show(TestCar749866031 $testcar749866031)
    {
        return view('admin.testcar749866031.show', compact('testcar749866031'));
    }
}
