<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1247988588;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1247988588.index');
    }

    public function create()
    {
        return view('admin.testcar1247988588.create');
    }

    public function edit(TestCar1247988588 $testCar1247988588)
    {
        return view('admin.testcar1247988588.edit', compact('testCar1247988588'));
    }

    public function show(TestCar1247988588 $testCar1247988588)
    {
        return view('admin.testcar1247988588.show', compact('testCar1247988588'));
    }
}
