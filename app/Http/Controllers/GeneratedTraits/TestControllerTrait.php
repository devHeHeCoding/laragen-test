<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1320179828;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1320179828.index');
    }

    public function create()
    {
        return view('admin.testcar1320179828.create');
    }

    public function edit(TestCar1320179828 $testCar1320179828)
    {
        return view('admin.testcar1320179828.edit', compact('testCar1320179828'));
    }

    public function show(TestCar1320179828 $testCar1320179828)
    {
        return view('admin.testcar1320179828.show', compact('testCar1320179828'));
    }
}
