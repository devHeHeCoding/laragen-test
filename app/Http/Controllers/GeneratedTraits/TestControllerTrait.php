<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1471706017;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1471706017.index');
    }

    public function create()
    {
        return view('admin.testcar1471706017.create');
    }

    public function edit(TestCar1471706017 $testCar1471706017)
    {
        return view('admin.testcar1471706017.edit', compact('testCar1471706017'));
    }

    public function show(TestCar1471706017 $testCar1471706017)
    {
        return view('admin.testcar1471706017.show', compact('testCar1471706017'));
    }
}
