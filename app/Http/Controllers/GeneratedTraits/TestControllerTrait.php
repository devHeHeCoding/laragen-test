<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1616682440;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1616682440.index');
    }

    public function create()
    {
        return view('admin.testcar1616682440.create');
    }

    public function edit(TestCar1616682440 $testCar1616682440)
    {
        return view('admin.testcar1616682440.edit', compact('testCar1616682440'));
    }

    public function show(TestCar1616682440 $testCar1616682440)
    {
        return view('admin.testcar1616682440.show', compact('testCar1616682440'));
    }
}
