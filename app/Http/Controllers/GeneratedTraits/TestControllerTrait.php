<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar556394034;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar556394034.index');
    }

    public function create()
    {
        return view('admin.testcar556394034.create');
    }

    public function edit(TestCar556394034 $testCar556394034)
    {
        return view('admin.testcar556394034.edit', compact('testCar556394034'));
    }

    public function show(TestCar556394034 $testCar556394034)
    {
        return view('admin.testcar556394034.show', compact('testCar556394034'));
    }
}
