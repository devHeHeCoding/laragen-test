<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar469150571;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar469150571.index');
    }

    public function create()
    {
        return view('admin.testcar469150571.create');
    }

    public function edit(TestCar469150571 $testCar469150571)
    {
        return view('admin.testcar469150571.edit', compact('testCar469150571'));
    }

    public function show(TestCar469150571 $testCar469150571)
    {
        return view('admin.testcar469150571.show', compact('testCar469150571'));
    }
}
