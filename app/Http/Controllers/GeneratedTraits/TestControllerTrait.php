<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar175351433;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar175351433.index');
    }

    public function create()
    {
        return view('admin.testcar175351433.create');
    }

    public function edit(TestCar175351433 $testCar175351433)
    {
        return view('admin.testcar175351433.edit', compact('testCar175351433'));
    }

    public function show(TestCar175351433 $testCar175351433)
    {
        return view('admin.testcar175351433.show', compact('testCar175351433'));
    }
}
