<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1958785920;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1958785920.index');
    }

    public function create()
    {
        return view('admin.testcar1958785920.create');
    }

    public function edit(TestCar1958785920 $testCar1958785920)
    {
        return view('admin.testcar1958785920.edit', compact('testCar1958785920'));
    }

    public function show(TestCar1958785920 $testCar1958785920)
    {
        return view('admin.testcar1958785920.show', compact('testCar1958785920'));
    }
}
