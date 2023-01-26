<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar243053359;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar243053359.index');
    }

    public function create()
    {
        return view('admin.testcar243053359.create');
    }

    public function edit(TestCar243053359 $testCar243053359)
    {
        return view('admin.testcar243053359.edit', compact('testCar243053359'));
    }

    public function show(TestCar243053359 $testCar243053359)
    {
        return view('admin.testcar243053359.show', compact('testCar243053359'));
    }
}
