<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1296106034;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1296106034.index');
    }

    public function create()
    {
        return view('admin.testcar1296106034.create');
    }

    public function edit(TestCar1296106034 $testCar1296106034)
    {
        return view('admin.testcar1296106034.edit', compact('testCar1296106034'));
    }

    public function show(TestCar1296106034 $testCar1296106034)
    {
        return view('admin.testcar1296106034.show', compact('testCar1296106034'));
    }
}
