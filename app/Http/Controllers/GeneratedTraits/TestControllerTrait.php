<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar385831353;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar385831353.index');
    }

    public function create()
    {
        return view('admin.testcar385831353.create');
    }

    public function edit(TestCar385831353 $testCar385831353)
    {
        return view('admin.testcar385831353.edit', compact('testCar385831353'));
    }

    public function show(TestCar385831353 $testCar385831353)
    {
        return view('admin.testcar385831353.show', compact('testCar385831353'));
    }
}
