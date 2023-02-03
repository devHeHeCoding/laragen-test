<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1499312371;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1499312371.index');
    }

    public function create()
    {
        return view('admin.testcar1499312371.create');
    }

    public function edit(TestCar1499312371 $testCar1499312371)
    {
        return view('admin.testcar1499312371.edit', compact('testCar1499312371'));
    }

    public function show(TestCar1499312371 $testCar1499312371)
    {
        return view('admin.testcar1499312371.show', compact('testCar1499312371'));
    }
}
