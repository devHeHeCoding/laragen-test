<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1398032284;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1398032284.index');
    }

    public function create()
    {
        return view('admin.testcar1398032284.create');
    }

    public function edit(TestCar1398032284 $testCar1398032284)
    {
        return view('admin.testcar1398032284.edit', compact('testCar1398032284'));
    }

    public function show(TestCar1398032284 $testCar1398032284)
    {
        return view('admin.testcar1398032284.show', compact('testCar1398032284'));
    }
}
