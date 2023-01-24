<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1142857027;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1142857027.index');
    }

    public function create()
    {
        return view('admin.testcar1142857027.create');
    }

    public function edit(TestCar1142857027 $testCar1142857027)
    {
        return view('admin.testcar1142857027.edit', compact('testCar1142857027'));
    }

    public function show(TestCar1142857027 $testCar1142857027)
    {
        return view('admin.testcar1142857027.show', compact('testCar1142857027'));
    }
}
