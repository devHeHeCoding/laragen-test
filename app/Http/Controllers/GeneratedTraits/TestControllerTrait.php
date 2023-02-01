<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1677932393;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1677932393.index');
    }

    public function create()
    {
        return view('admin.testcar1677932393.create');
    }

    public function edit(TestCar1677932393 $testCar1677932393)
    {
        return view('admin.testcar1677932393.edit', compact('testCar1677932393'));
    }

    public function show(TestCar1677932393 $testCar1677932393)
    {
        return view('admin.testcar1677932393.show', compact('testCar1677932393'));
    }
}
