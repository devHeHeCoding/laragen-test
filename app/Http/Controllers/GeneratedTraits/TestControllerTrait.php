<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar30717885;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar30717885.index');
    }

    public function create()
    {
        return view('admin.testcar30717885.create');
    }

    public function edit(TestCar30717885 $testCar30717885)
    {
        return view('admin.testcar30717885.edit', compact('testCar30717885'));
    }

    public function show(TestCar30717885 $testCar30717885)
    {
        return view('admin.testcar30717885.show', compact('testCar30717885'));
    }
}
