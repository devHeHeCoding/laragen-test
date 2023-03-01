<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1164626058;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1164626058.index');
    }

    public function create()
    {
        return view('admin.testcar1164626058.create');
    }

    public function edit(TestCar1164626058 $testCar1164626058)
    {
        return view('admin.testcar1164626058.edit', compact('testCar1164626058'));
    }

    public function show(TestCar1164626058 $testCar1164626058)
    {
        return view('admin.testcar1164626058.show', compact('testCar1164626058'));
    }
}
