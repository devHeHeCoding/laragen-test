<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar584991464;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar584991464.index');
    }

    public function create()
    {
        return view('admin.testcar584991464.create');
    }

    public function edit(TestCar584991464 $testCar584991464)
    {
        return view('admin.testcar584991464.edit', compact('testCar584991464'));
    }

    public function show(TestCar584991464 $testCar584991464)
    {
        return view('admin.testcar584991464.show', compact('testCar584991464'));
    }
}
