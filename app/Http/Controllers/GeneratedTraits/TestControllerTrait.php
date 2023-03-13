<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar932819473;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar932819473.index');
    }

    public function create()
    {
        return view('admin.testcar932819473.create');
    }

    public function edit(TestCar932819473 $testCar932819473)
    {
        return view('admin.testcar932819473.edit', compact('testCar932819473'));
    }

    public function show(TestCar932819473 $testCar932819473)
    {
        return view('admin.testcar932819473.show', compact('testCar932819473'));
    }
}
