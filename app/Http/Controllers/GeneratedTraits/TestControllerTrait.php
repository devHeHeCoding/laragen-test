<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar251616098;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar251616098.index');
    }

    public function create()
    {
        return view('admin.testcar251616098.create');
    }

    public function edit(TestCar251616098 $testCar251616098)
    {
        return view('admin.testcar251616098.edit', compact('testCar251616098'));
    }

    public function show(TestCar251616098 $testCar251616098)
    {
        return view('admin.testcar251616098.show', compact('testCar251616098'));
    }
}
