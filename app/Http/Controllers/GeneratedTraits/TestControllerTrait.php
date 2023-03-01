<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar169681796;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar169681796.index');
    }

    public function create()
    {
        return view('admin.testcar169681796.create');
    }

    public function edit(TestCar169681796 $testCar169681796)
    {
        return view('admin.testcar169681796.edit', compact('testCar169681796'));
    }

    public function show(TestCar169681796 $testCar169681796)
    {
        return view('admin.testcar169681796.show', compact('testCar169681796'));
    }
}
