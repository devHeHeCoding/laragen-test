<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1018942994;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1018942994.index');
    }

    public function create()
    {
        return view('admin.testcar1018942994.create');
    }

    public function edit(TestCar1018942994 $testCar1018942994)
    {
        return view('admin.testcar1018942994.edit', compact('testCar1018942994'));
    }

    public function show(TestCar1018942994 $testCar1018942994)
    {
        return view('admin.testcar1018942994.show', compact('testCar1018942994'));
    }
}
