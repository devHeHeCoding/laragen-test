<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1556346522;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1556346522.index');
    }

    public function create()
    {
        return view('admin.testcar1556346522.create');
    }

    public function edit(TestCar1556346522 $testCar1556346522)
    {
        return view('admin.testcar1556346522.edit', compact('testCar1556346522'));
    }

    public function show(TestCar1556346522 $testCar1556346522)
    {
        return view('admin.testcar1556346522.show', compact('testCar1556346522'));
    }
}
