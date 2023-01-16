<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1489424982;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1489424982.index');
    }

    public function create()
    {
        return view('admin.testcar1489424982.create');
    }

    public function edit(TestCar1489424982 $testcar1489424982)
    {
        return view('admin.testcar1489424982.edit', compact('testcar1489424982'));
    }

    public function show(TestCar1489424982 $testcar1489424982)
    {
        return view('admin.testcar1489424982.show', compact('testcar1489424982'));
    }
}
