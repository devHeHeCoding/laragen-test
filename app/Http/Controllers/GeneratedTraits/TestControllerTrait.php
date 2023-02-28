<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1817031865;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1817031865.index');
    }

    public function create()
    {
        return view('admin.testcar1817031865.create');
    }

    public function edit(TestCar1817031865 $testCar1817031865)
    {
        return view('admin.testcar1817031865.edit', compact('testCar1817031865'));
    }

    public function show(TestCar1817031865 $testCar1817031865)
    {
        return view('admin.testcar1817031865.show', compact('testCar1817031865'));
    }
}
