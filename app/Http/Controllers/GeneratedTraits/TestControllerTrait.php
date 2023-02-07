<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1576106383;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1576106383.index');
    }

    public function create()
    {
        return view('admin.testcar1576106383.create');
    }

    public function edit(TestCar1576106383 $testCar1576106383)
    {
        return view('admin.testcar1576106383.edit', compact('testCar1576106383'));
    }

    public function show(TestCar1576106383 $testCar1576106383)
    {
        return view('admin.testcar1576106383.show', compact('testCar1576106383'));
    }
}
