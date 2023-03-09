<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar260875948;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar260875948.index');
    }

    public function create()
    {
        return view('admin.testcar260875948.create');
    }

    public function edit(TestCar260875948 $testCar260875948)
    {
        return view('admin.testcar260875948.edit', compact('testCar260875948'));
    }

    public function show(TestCar260875948 $testCar260875948)
    {
        return view('admin.testcar260875948.show', compact('testCar260875948'));
    }
}
