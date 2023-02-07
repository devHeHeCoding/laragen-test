<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1729187173;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1729187173.index');
    }

    public function create()
    {
        return view('admin.testcar1729187173.create');
    }

    public function edit(TestCar1729187173 $testCar1729187173)
    {
        return view('admin.testcar1729187173.edit', compact('testCar1729187173'));
    }

    public function show(TestCar1729187173 $testCar1729187173)
    {
        return view('admin.testcar1729187173.show', compact('testCar1729187173'));
    }
}
