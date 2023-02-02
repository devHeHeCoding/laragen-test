<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1214760672;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1214760672.index');
    }

    public function create()
    {
        return view('admin.testcar1214760672.create');
    }

    public function edit(TestCar1214760672 $testCar1214760672)
    {
        return view('admin.testcar1214760672.edit', compact('testCar1214760672'));
    }

    public function show(TestCar1214760672 $testCar1214760672)
    {
        return view('admin.testcar1214760672.show', compact('testCar1214760672'));
    }
}
