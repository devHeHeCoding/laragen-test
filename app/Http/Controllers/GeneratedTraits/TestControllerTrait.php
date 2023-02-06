<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar970372432;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar970372432.index');
    }

    public function create()
    {
        return view('admin.testcar970372432.create');
    }

    public function edit(TestCar970372432 $testCar970372432)
    {
        return view('admin.testcar970372432.edit', compact('testCar970372432'));
    }

    public function show(TestCar970372432 $testCar970372432)
    {
        return view('admin.testcar970372432.show', compact('testCar970372432'));
    }
}
