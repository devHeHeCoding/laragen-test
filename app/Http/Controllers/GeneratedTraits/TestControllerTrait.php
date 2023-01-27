<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1793038448;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1793038448.index');
    }

    public function create()
    {
        return view('admin.testcar1793038448.create');
    }

    public function edit(TestCar1793038448 $testCar1793038448)
    {
        return view('admin.testcar1793038448.edit', compact('testCar1793038448'));
    }

    public function show(TestCar1793038448 $testCar1793038448)
    {
        return view('admin.testcar1793038448.show', compact('testCar1793038448'));
    }
}
