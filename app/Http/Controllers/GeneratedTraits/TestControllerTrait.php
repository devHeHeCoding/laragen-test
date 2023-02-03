<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar573271013;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar573271013.index');
    }

    public function create()
    {
        return view('admin.testcar573271013.create');
    }

    public function edit(TestCar573271013 $testCar573271013)
    {
        return view('admin.testcar573271013.edit', compact('testCar573271013'));
    }

    public function show(TestCar573271013 $testCar573271013)
    {
        return view('admin.testcar573271013.show', compact('testCar573271013'));
    }
}
