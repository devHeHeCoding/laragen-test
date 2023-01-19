<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar392025487;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar392025487.index');
    }

    public function create()
    {
        return view('admin.testcar392025487.create');
    }

    public function edit(TestCar392025487 $testcar392025487)
    {
        return view('admin.testcar392025487.edit', compact('testcar392025487'));
    }

    public function show(TestCar392025487 $testcar392025487)
    {
        return view('admin.testcar392025487.show', compact('testcar392025487'));
    }
}
