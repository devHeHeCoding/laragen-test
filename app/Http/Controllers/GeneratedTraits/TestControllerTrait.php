<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar397828097;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar397828097.index');
    }

    public function create()
    {
        return view('admin.testcar397828097.create');
    }

    public function edit(TestCar397828097 $testCar397828097)
    {
        return view('admin.testcar397828097.edit', compact('testCar397828097'));
    }

    public function show(TestCar397828097 $testCar397828097)
    {
        return view('admin.testcar397828097.show', compact('testCar397828097'));
    }
}
