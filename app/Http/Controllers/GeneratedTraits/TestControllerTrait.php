<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2128814019;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2128814019.index');
    }

    public function create()
    {
        return view('admin.testcar2128814019.create');
    }

    public function edit(TestCar2128814019 $testCar2128814019)
    {
        return view('admin.testcar2128814019.edit', compact('testCar2128814019'));
    }

    public function show(TestCar2128814019 $testCar2128814019)
    {
        return view('admin.testcar2128814019.show', compact('testCar2128814019'));
    }
}
