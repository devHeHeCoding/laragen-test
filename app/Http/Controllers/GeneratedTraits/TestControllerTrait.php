<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1746530194;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1746530194.index');
    }

    public function create()
    {
        return view('admin.testcar1746530194.create');
    }

    public function edit(TestCar1746530194 $testCar1746530194)
    {
        return view('admin.testcar1746530194.edit', compact('testCar1746530194'));
    }

    public function show(TestCar1746530194 $testCar1746530194)
    {
        return view('admin.testcar1746530194.show', compact('testCar1746530194'));
    }
}
