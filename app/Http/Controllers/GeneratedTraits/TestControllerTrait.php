<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2025907584;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2025907584.index');
    }

    public function create()
    {
        return view('admin.testcar2025907584.create');
    }

    public function edit(TestCar2025907584 $testCar2025907584)
    {
        return view('admin.testcar2025907584.edit', compact('testCar2025907584'));
    }

    public function show(TestCar2025907584 $testCar2025907584)
    {
        return view('admin.testcar2025907584.show', compact('testCar2025907584'));
    }
}
