<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1686850124;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1686850124.index');
    }

    public function create()
    {
        return view('admin.testcar1686850124.create');
    }

    public function edit(TestCar1686850124 $testCar1686850124)
    {
        return view('admin.testcar1686850124.edit', compact('testCar1686850124'));
    }

    public function show(TestCar1686850124 $testCar1686850124)
    {
        return view('admin.testcar1686850124.show', compact('testCar1686850124'));
    }
}
