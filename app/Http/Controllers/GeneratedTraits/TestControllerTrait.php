<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar17145504;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar17145504.index');
    }

    public function create()
    {
        return view('admin.testcar17145504.create');
    }

    public function edit(TestCar17145504 $testCar17145504)
    {
        return view('admin.testcar17145504.edit', compact('testCar17145504'));
    }

    public function show(TestCar17145504 $testCar17145504)
    {
        return view('admin.testcar17145504.show', compact('testCar17145504'));
    }
}
