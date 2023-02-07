<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1602388900;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1602388900.index');
    }

    public function create()
    {
        return view('admin.testcar1602388900.create');
    }

    public function edit(TestCar1602388900 $testCar1602388900)
    {
        return view('admin.testcar1602388900.edit', compact('testCar1602388900'));
    }

    public function show(TestCar1602388900 $testCar1602388900)
    {
        return view('admin.testcar1602388900.show', compact('testCar1602388900'));
    }
}
