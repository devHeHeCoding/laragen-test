<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1147131989;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1147131989.index');
    }

    public function create()
    {
        return view('admin.testcar1147131989.create');
    }

    public function edit(TestCar1147131989 $testCar1147131989)
    {
        return view('admin.testcar1147131989.edit', compact('testCar1147131989'));
    }

    public function show(TestCar1147131989 $testCar1147131989)
    {
        return view('admin.testcar1147131989.show', compact('testCar1147131989'));
    }
}
