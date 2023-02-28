<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1477719599;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1477719599.index');
    }

    public function create()
    {
        return view('admin.testcar1477719599.create');
    }

    public function edit(TestCar1477719599 $testCar1477719599)
    {
        return view('admin.testcar1477719599.edit', compact('testCar1477719599'));
    }

    public function show(TestCar1477719599 $testCar1477719599)
    {
        return view('admin.testcar1477719599.show', compact('testCar1477719599'));
    }
}
