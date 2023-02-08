<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar572200391;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar572200391.index');
    }

    public function create()
    {
        return view('admin.testcar572200391.create');
    }

    public function edit(TestCar572200391 $testCar572200391)
    {
        return view('admin.testcar572200391.edit', compact('testCar572200391'));
    }

    public function show(TestCar572200391 $testCar572200391)
    {
        return view('admin.testcar572200391.show', compact('testCar572200391'));
    }
}
