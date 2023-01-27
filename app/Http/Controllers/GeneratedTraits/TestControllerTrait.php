<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar930361748;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar930361748.index');
    }

    public function create()
    {
        return view('admin.testcar930361748.create');
    }

    public function edit(TestCar930361748 $testCar930361748)
    {
        return view('admin.testcar930361748.edit', compact('testCar930361748'));
    }

    public function show(TestCar930361748 $testCar930361748)
    {
        return view('admin.testcar930361748.show', compact('testCar930361748'));
    }
}
