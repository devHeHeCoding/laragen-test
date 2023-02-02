<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1895561726;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1895561726.index');
    }

    public function create()
    {
        return view('admin.testcar1895561726.create');
    }

    public function edit(TestCar1895561726 $testCar1895561726)
    {
        return view('admin.testcar1895561726.edit', compact('testCar1895561726'));
    }

    public function show(TestCar1895561726 $testCar1895561726)
    {
        return view('admin.testcar1895561726.show', compact('testCar1895561726'));
    }
}
