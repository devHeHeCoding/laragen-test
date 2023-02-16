<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar20837838;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar20837838.index');
    }

    public function create()
    {
        return view('admin.testcar20837838.create');
    }

    public function edit(TestCar20837838 $testCar20837838)
    {
        return view('admin.testcar20837838.edit', compact('testCar20837838'));
    }

    public function show(TestCar20837838 $testCar20837838)
    {
        return view('admin.testcar20837838.show', compact('testCar20837838'));
    }
}
