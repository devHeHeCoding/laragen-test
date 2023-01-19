<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1374122044;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1374122044.index');
    }

    public function create()
    {
        return view('admin.testcar1374122044.create');
    }

    public function edit(TestCar1374122044 $testcar1374122044)
    {
        return view('admin.testcar1374122044.edit', compact('testcar1374122044'));
    }

    public function show(TestCar1374122044 $testcar1374122044)
    {
        return view('admin.testcar1374122044.show', compact('testcar1374122044'));
    }
}
