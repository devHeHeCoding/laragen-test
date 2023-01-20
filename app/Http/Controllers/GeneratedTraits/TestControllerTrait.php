<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar653226235;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar653226235.index');
    }

    public function create()
    {
        return view('admin.testcar653226235.create');
    }

    public function edit(TestCar653226235 $testCar653226235)
    {
        return view('admin.testcar653226235.edit', compact('testCar653226235'));
    }

    public function show(TestCar653226235 $testCar653226235)
    {
        return view('admin.testcar653226235.show', compact('testCar653226235'));
    }
}
