<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar500896906;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar500896906.index');
    }

    public function create()
    {
        return view('admin.testcar500896906.create');
    }

    public function edit(TestCar500896906 $testCar500896906)
    {
        return view('admin.testcar500896906.edit', compact('testCar500896906'));
    }

    public function show(TestCar500896906 $testCar500896906)
    {
        return view('admin.testcar500896906.show', compact('testCar500896906'));
    }
}
