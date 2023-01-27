<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar861757788;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar861757788.index');
    }

    public function create()
    {
        return view('admin.testcar861757788.create');
    }

    public function edit(TestCar861757788 $testCar861757788)
    {
        return view('admin.testcar861757788.edit', compact('testCar861757788'));
    }

    public function show(TestCar861757788 $testCar861757788)
    {
        return view('admin.testcar861757788.show', compact('testCar861757788'));
    }
}
