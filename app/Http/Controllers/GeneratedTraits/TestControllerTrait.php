<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar561906651;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar561906651.index');
    }

    public function create()
    {
        return view('admin.testcar561906651.create');
    }

    public function edit(TestCar561906651 $testCar561906651)
    {
        return view('admin.testcar561906651.edit', compact('testCar561906651'));
    }

    public function show(TestCar561906651 $testCar561906651)
    {
        return view('admin.testcar561906651.show', compact('testCar561906651'));
    }
}
