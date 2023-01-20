<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar337160262;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar337160262.index');
    }

    public function create()
    {
        return view('admin.testcar337160262.create');
    }

    public function edit(TestCar337160262 $testCar337160262)
    {
        return view('admin.testcar337160262.edit', compact('testCar337160262'));
    }

    public function show(TestCar337160262 $testCar337160262)
    {
        return view('admin.testcar337160262.show', compact('testCar337160262'));
    }
}
