<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1874892366;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1874892366.index');
    }

    public function create()
    {
        return view('admin.testcar1874892366.create');
    }

    public function edit(TestCar1874892366 $testCar1874892366)
    {
        return view('admin.testcar1874892366.edit', compact('testCar1874892366'));
    }

    public function show(TestCar1874892366 $testCar1874892366)
    {
        return view('admin.testcar1874892366.show', compact('testCar1874892366'));
    }
}
