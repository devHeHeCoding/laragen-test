<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar565247789;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar565247789.index');
    }

    public function create()
    {
        return view('admin.testcar565247789.create');
    }

    public function edit(TestCar565247789 $testCar565247789)
    {
        return view('admin.testcar565247789.edit', compact('testCar565247789'));
    }

    public function show(TestCar565247789 $testCar565247789)
    {
        return view('admin.testcar565247789.show', compact('testCar565247789'));
    }
}
