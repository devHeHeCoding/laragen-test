<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar590167015;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar590167015.index');
    }

    public function create()
    {
        return view('admin.testcar590167015.create');
    }

    public function edit(TestCar590167015 $testCar590167015)
    {
        return view('admin.testcar590167015.edit', compact('testCar590167015'));
    }

    public function show(TestCar590167015 $testCar590167015)
    {
        return view('admin.testcar590167015.show', compact('testCar590167015'));
    }
}
