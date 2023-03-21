<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1656671257;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1656671257.index');
    }

    public function create()
    {
        return view('admin.testcar1656671257.create');
    }

    public function edit(TestCar1656671257 $testCar1656671257)
    {
        return view('admin.testcar1656671257.edit', compact('testCar1656671257'));
    }

    public function show(TestCar1656671257 $testCar1656671257)
    {
        return view('admin.testcar1656671257.show', compact('testCar1656671257'));
    }
}
