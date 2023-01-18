<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar189975867;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar189975867.index');
    }

    public function create()
    {
        return view('admin.testcar189975867.create');
    }

    public function edit(TestCar189975867 $testcar189975867)
    {
        return view('admin.testcar189975867.edit', compact('testcar189975867'));
    }

    public function show(TestCar189975867 $testcar189975867)
    {
        return view('admin.testcar189975867.show', compact('testcar189975867'));
    }
}
