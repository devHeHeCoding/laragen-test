<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar738781303;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar738781303.index');
    }

    public function create()
    {
        return view('admin.testcar738781303.create');
    }

    public function edit(TestCar738781303 $testCar738781303)
    {
        return view('admin.testcar738781303.edit', compact('testCar738781303'));
    }

    public function show(TestCar738781303 $testCar738781303)
    {
        return view('admin.testcar738781303.show', compact('testCar738781303'));
    }
}
