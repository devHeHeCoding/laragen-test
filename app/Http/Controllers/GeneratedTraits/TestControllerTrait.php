<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar241054347;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar241054347.index');
    }

    public function create()
    {
        return view('admin.testcar241054347.create');
    }

    public function edit(TestCar241054347 $testCar241054347)
    {
        return view('admin.testcar241054347.edit', compact('testCar241054347'));
    }

    public function show(TestCar241054347 $testCar241054347)
    {
        return view('admin.testcar241054347.show', compact('testCar241054347'));
    }
}
