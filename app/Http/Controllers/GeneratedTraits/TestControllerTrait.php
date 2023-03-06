<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar925481405;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar925481405.index');
    }

    public function create()
    {
        return view('admin.testcar925481405.create');
    }

    public function edit(TestCar925481405 $testCar925481405)
    {
        return view('admin.testcar925481405.edit', compact('testCar925481405'));
    }

    public function show(TestCar925481405 $testCar925481405)
    {
        return view('admin.testcar925481405.show', compact('testCar925481405'));
    }
}
