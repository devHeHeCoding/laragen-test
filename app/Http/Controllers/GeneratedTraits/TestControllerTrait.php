<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar607009969;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar607009969.index');
    }

    public function create()
    {
        return view('admin.testcar607009969.create');
    }

    public function edit(TestCar607009969 $testcar607009969)
    {
        return view('admin.testcar607009969.edit', compact('testcar607009969'));
    }

    public function show(TestCar607009969 $testcar607009969)
    {
        return view('admin.testcar607009969.show', compact('testcar607009969'));
    }
}
