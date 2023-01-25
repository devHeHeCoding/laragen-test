<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar54600968;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar54600968.index');
    }

    public function create()
    {
        return view('admin.testcar54600968.create');
    }

    public function edit(TestCar54600968 $testCar54600968)
    {
        return view('admin.testcar54600968.edit', compact('testCar54600968'));
    }

    public function show(TestCar54600968 $testCar54600968)
    {
        return view('admin.testcar54600968.show', compact('testCar54600968'));
    }
}
