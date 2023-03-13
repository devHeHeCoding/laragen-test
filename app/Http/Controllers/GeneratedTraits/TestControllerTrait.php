<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar662858584;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar662858584.index');
    }

    public function create()
    {
        return view('admin.testcar662858584.create');
    }

    public function edit(TestCar662858584 $testCar662858584)
    {
        return view('admin.testcar662858584.edit', compact('testCar662858584'));
    }

    public function show(TestCar662858584 $testCar662858584)
    {
        return view('admin.testcar662858584.show', compact('testCar662858584'));
    }
}
