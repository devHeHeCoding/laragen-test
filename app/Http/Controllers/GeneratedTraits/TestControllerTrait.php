<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar402781284;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar402781284.index');
    }

    public function create()
    {
        return view('admin.testcar402781284.create');
    }

    public function edit(TestCar402781284 $testCar402781284)
    {
        return view('admin.testcar402781284.edit', compact('testCar402781284'));
    }

    public function show(TestCar402781284 $testCar402781284)
    {
        return view('admin.testcar402781284.show', compact('testCar402781284'));
    }
}
