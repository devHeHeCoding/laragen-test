<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1407877259;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1407877259.index');
    }

    public function create()
    {
        return view('admin.testcar1407877259.create');
    }

    public function edit(TestCar1407877259 $testCar1407877259)
    {
        return view('admin.testcar1407877259.edit', compact('testCar1407877259'));
    }

    public function show(TestCar1407877259 $testCar1407877259)
    {
        return view('admin.testcar1407877259.show', compact('testCar1407877259'));
    }
}
