<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar443014738;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar443014738.index');
    }

    public function create()
    {
        return view('admin.testcar443014738.create');
    }

    public function edit(TestCar443014738 $testCar443014738)
    {
        return view('admin.testcar443014738.edit', compact('testCar443014738'));
    }

    public function show(TestCar443014738 $testCar443014738)
    {
        return view('admin.testcar443014738.show', compact('testCar443014738'));
    }
}
