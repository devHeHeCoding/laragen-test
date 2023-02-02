<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1704748392;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1704748392.index');
    }

    public function create()
    {
        return view('admin.testcar1704748392.create');
    }

    public function edit(TestCar1704748392 $testCar1704748392)
    {
        return view('admin.testcar1704748392.edit', compact('testCar1704748392'));
    }

    public function show(TestCar1704748392 $testCar1704748392)
    {
        return view('admin.testcar1704748392.show', compact('testCar1704748392'));
    }
}
