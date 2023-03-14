<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1243674150;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1243674150.index');
    }

    public function create()
    {
        return view('admin.testcar1243674150.create');
    }

    public function edit(TestCar1243674150 $testCar1243674150)
    {
        return view('admin.testcar1243674150.edit', compact('testCar1243674150'));
    }

    public function show(TestCar1243674150 $testCar1243674150)
    {
        return view('admin.testcar1243674150.show', compact('testCar1243674150'));
    }
}
