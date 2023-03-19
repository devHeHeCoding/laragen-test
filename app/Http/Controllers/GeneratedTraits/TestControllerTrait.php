<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar150542530;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar150542530.index');
    }

    public function create()
    {
        return view('admin.testcar150542530.create');
    }

    public function edit(TestCar150542530 $testCar150542530)
    {
        return view('admin.testcar150542530.edit', compact('testCar150542530'));
    }

    public function show(TestCar150542530 $testCar150542530)
    {
        return view('admin.testcar150542530.show', compact('testCar150542530'));
    }
}
