<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar760085987;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar760085987.index');
    }

    public function create()
    {
        return view('admin.testcar760085987.create');
    }

    public function edit(TestCar760085987 $testCar760085987)
    {
        return view('admin.testcar760085987.edit', compact('testCar760085987'));
    }

    public function show(TestCar760085987 $testCar760085987)
    {
        return view('admin.testcar760085987.show', compact('testCar760085987'));
    }
}
