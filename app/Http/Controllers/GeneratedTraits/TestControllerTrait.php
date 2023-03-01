<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar313949386;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar313949386.index');
    }

    public function create()
    {
        return view('admin.testcar313949386.create');
    }

    public function edit(TestCar313949386 $testCar313949386)
    {
        return view('admin.testcar313949386.edit', compact('testCar313949386'));
    }

    public function show(TestCar313949386 $testCar313949386)
    {
        return view('admin.testcar313949386.show', compact('testCar313949386'));
    }
}
