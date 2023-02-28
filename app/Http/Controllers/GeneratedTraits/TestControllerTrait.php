<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1567495526;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1567495526.index');
    }

    public function create()
    {
        return view('admin.testcar1567495526.create');
    }

    public function edit(TestCar1567495526 $testCar1567495526)
    {
        return view('admin.testcar1567495526.edit', compact('testCar1567495526'));
    }

    public function show(TestCar1567495526 $testCar1567495526)
    {
        return view('admin.testcar1567495526.show', compact('testCar1567495526'));
    }
}
