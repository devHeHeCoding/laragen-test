<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar738236358;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar738236358.index');
    }

    public function create()
    {
        return view('admin.testcar738236358.create');
    }

    public function edit(TestCar738236358 $testCar738236358)
    {
        return view('admin.testcar738236358.edit', compact('testCar738236358'));
    }

    public function show(TestCar738236358 $testCar738236358)
    {
        return view('admin.testcar738236358.show', compact('testCar738236358'));
    }
}
