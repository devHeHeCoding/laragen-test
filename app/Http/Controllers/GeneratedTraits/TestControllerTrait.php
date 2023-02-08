<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar742407724;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar742407724.index');
    }

    public function create()
    {
        return view('admin.testcar742407724.create');
    }

    public function edit(TestCar742407724 $testCar742407724)
    {
        return view('admin.testcar742407724.edit', compact('testCar742407724'));
    }

    public function show(TestCar742407724 $testCar742407724)
    {
        return view('admin.testcar742407724.show', compact('testCar742407724'));
    }
}
