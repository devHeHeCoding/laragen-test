<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1059562808;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1059562808.index');
    }

    public function create()
    {
        return view('admin.testcar1059562808.create');
    }

    public function edit(TestCar1059562808 $testCar1059562808)
    {
        return view('admin.testcar1059562808.edit', compact('testCar1059562808'));
    }

    public function show(TestCar1059562808 $testCar1059562808)
    {
        return view('admin.testcar1059562808.show', compact('testCar1059562808'));
    }
}
