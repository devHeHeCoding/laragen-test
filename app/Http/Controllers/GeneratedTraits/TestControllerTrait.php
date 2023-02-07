<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar734754007;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar734754007.index');
    }

    public function create()
    {
        return view('admin.testcar734754007.create');
    }

    public function edit(TestCar734754007 $testCar734754007)
    {
        return view('admin.testcar734754007.edit', compact('testCar734754007'));
    }

    public function show(TestCar734754007 $testCar734754007)
    {
        return view('admin.testcar734754007.show', compact('testCar734754007'));
    }
}
