<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1695960584;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1695960584.index');
    }

    public function create()
    {
        return view('admin.testcar1695960584.create');
    }

    public function edit(TestCar1695960584 $testCar1695960584)
    {
        return view('admin.testcar1695960584.edit', compact('testCar1695960584'));
    }

    public function show(TestCar1695960584 $testCar1695960584)
    {
        return view('admin.testcar1695960584.show', compact('testCar1695960584'));
    }
}
