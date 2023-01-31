<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar738787120;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar738787120.index');
    }

    public function create()
    {
        return view('admin.testcar738787120.create');
    }

    public function edit(TestCar738787120 $testCar738787120)
    {
        return view('admin.testcar738787120.edit', compact('testCar738787120'));
    }

    public function show(TestCar738787120 $testCar738787120)
    {
        return view('admin.testcar738787120.show', compact('testCar738787120'));
    }
}
