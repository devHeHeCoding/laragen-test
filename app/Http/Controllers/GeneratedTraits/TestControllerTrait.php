<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2045697739;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2045697739.index');
    }

    public function create()
    {
        return view('admin.testcar2045697739.create');
    }

    public function edit(TestCar2045697739 $testCar2045697739)
    {
        return view('admin.testcar2045697739.edit', compact('testCar2045697739'));
    }

    public function show(TestCar2045697739 $testCar2045697739)
    {
        return view('admin.testcar2045697739.show', compact('testCar2045697739'));
    }
}
