<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2093887144;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2093887144.index');
    }

    public function create()
    {
        return view('admin.testcar2093887144.create');
    }

    public function edit(TestCar2093887144 $testCar2093887144)
    {
        return view('admin.testcar2093887144.edit', compact('testCar2093887144'));
    }

    public function show(TestCar2093887144 $testCar2093887144)
    {
        return view('admin.testcar2093887144.show', compact('testCar2093887144'));
    }
}
