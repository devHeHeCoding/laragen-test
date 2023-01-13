<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar138541982;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar138541982.index');
    }

    public function create()
    {
        return view('admin.testcar138541982.create');
    }

    public function edit(TestCar138541982 $testcar138541982)
    {
        return view('admin.testcar138541982.edit', compact('testcar138541982'));
    }

    public function show(TestCar138541982 $testcar138541982)
    {
        return view('admin.testcar138541982.show', compact('testcar138541982'));
    }
}
