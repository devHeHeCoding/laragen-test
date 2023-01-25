<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar175029746;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar175029746.index');
    }

    public function create()
    {
        return view('admin.testcar175029746.create');
    }

    public function edit(TestCar175029746 $testCar175029746)
    {
        return view('admin.testcar175029746.edit', compact('testCar175029746'));
    }

    public function show(TestCar175029746 $testCar175029746)
    {
        return view('admin.testcar175029746.show', compact('testCar175029746'));
    }
}
