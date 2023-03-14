<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar821706938;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar821706938.index');
    }

    public function create()
    {
        return view('admin.testcar821706938.create');
    }

    public function edit(TestCar821706938 $testCar821706938)
    {
        return view('admin.testcar821706938.edit', compact('testCar821706938'));
    }

    public function show(TestCar821706938 $testCar821706938)
    {
        return view('admin.testcar821706938.show', compact('testCar821706938'));
    }
}
