<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1105510463;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1105510463.index');
    }

    public function create()
    {
        return view('admin.testcar1105510463.create');
    }

    public function edit(TestCar1105510463 $testCar1105510463)
    {
        return view('admin.testcar1105510463.edit', compact('testCar1105510463'));
    }

    public function show(TestCar1105510463 $testCar1105510463)
    {
        return view('admin.testcar1105510463.show', compact('testCar1105510463'));
    }
}
