<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar321241581;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar321241581.index');
    }

    public function create()
    {
        return view('admin.testcar321241581.create');
    }

    public function edit(TestCar321241581 $testCar321241581)
    {
        return view('admin.testcar321241581.edit', compact('testCar321241581'));
    }

    public function show(TestCar321241581 $testCar321241581)
    {
        return view('admin.testcar321241581.show', compact('testCar321241581'));
    }
}
