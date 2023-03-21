<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1347878297;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1347878297.index');
    }

    public function create()
    {
        return view('admin.testcar1347878297.create');
    }

    public function edit(TestCar1347878297 $testCar1347878297)
    {
        return view('admin.testcar1347878297.edit', compact('testCar1347878297'));
    }

    public function show(TestCar1347878297 $testCar1347878297)
    {
        return view('admin.testcar1347878297.show', compact('testCar1347878297'));
    }
}
