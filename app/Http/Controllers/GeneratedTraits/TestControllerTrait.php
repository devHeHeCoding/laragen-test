<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar77220492;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar77220492.index');
    }

    public function create()
    {
        return view('admin.testcar77220492.create');
    }

    public function edit(TestCar77220492 $testCar77220492)
    {
        return view('admin.testcar77220492.edit', compact('testCar77220492'));
    }

    public function show(TestCar77220492 $testCar77220492)
    {
        return view('admin.testcar77220492.show', compact('testCar77220492'));
    }
}
