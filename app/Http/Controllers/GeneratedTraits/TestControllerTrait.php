<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar660723101;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar660723101.index');
    }

    public function create()
    {
        return view('admin.testcar660723101.create');
    }

    public function edit(TestCar660723101 $testCar660723101)
    {
        return view('admin.testcar660723101.edit', compact('testCar660723101'));
    }

    public function show(TestCar660723101 $testCar660723101)
    {
        return view('admin.testcar660723101.show', compact('testCar660723101'));
    }
}
