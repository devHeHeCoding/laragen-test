<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1290363946;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1290363946.index');
    }

    public function create()
    {
        return view('admin.testcar1290363946.create');
    }

    public function edit(TestCar1290363946 $testCar1290363946)
    {
        return view('admin.testcar1290363946.edit', compact('testCar1290363946'));
    }

    public function show(TestCar1290363946 $testCar1290363946)
    {
        return view('admin.testcar1290363946.show', compact('testCar1290363946'));
    }
}
