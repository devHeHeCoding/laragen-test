<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar584339812;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar584339812.index');
    }

    public function create()
    {
        return view('admin.testcar584339812.create');
    }

    public function edit(TestCar584339812 $testCar584339812)
    {
        return view('admin.testcar584339812.edit', compact('testCar584339812'));
    }

    public function show(TestCar584339812 $testCar584339812)
    {
        return view('admin.testcar584339812.show', compact('testCar584339812'));
    }
}
