<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar901142568;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar901142568.index');
    }

    public function create()
    {
        return view('admin.testcar901142568.create');
    }

    public function edit(TestCar901142568 $testCar901142568)
    {
        return view('admin.testcar901142568.edit', compact('testCar901142568'));
    }

    public function show(TestCar901142568 $testCar901142568)
    {
        return view('admin.testcar901142568.show', compact('testCar901142568'));
    }
}
