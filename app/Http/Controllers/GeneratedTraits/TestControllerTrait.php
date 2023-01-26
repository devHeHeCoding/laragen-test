<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar926858672;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar926858672.index');
    }

    public function create()
    {
        return view('admin.testcar926858672.create');
    }

    public function edit(TestCar926858672 $testCar926858672)
    {
        return view('admin.testcar926858672.edit', compact('testCar926858672'));
    }

    public function show(TestCar926858672 $testCar926858672)
    {
        return view('admin.testcar926858672.show', compact('testCar926858672'));
    }
}
