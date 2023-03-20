<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2069782875;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2069782875.index');
    }

    public function create()
    {
        return view('admin.testcar2069782875.create');
    }

    public function edit(TestCar2069782875 $testCar2069782875)
    {
        return view('admin.testcar2069782875.edit', compact('testCar2069782875'));
    }

    public function show(TestCar2069782875 $testCar2069782875)
    {
        return view('admin.testcar2069782875.show', compact('testCar2069782875'));
    }
}
