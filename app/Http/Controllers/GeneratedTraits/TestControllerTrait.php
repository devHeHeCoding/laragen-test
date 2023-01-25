<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar67787661;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar67787661.index');
    }

    public function create()
    {
        return view('admin.testcar67787661.create');
    }

    public function edit(TestCar67787661 $testCar67787661)
    {
        return view('admin.testcar67787661.edit', compact('testCar67787661'));
    }

    public function show(TestCar67787661 $testCar67787661)
    {
        return view('admin.testcar67787661.show', compact('testCar67787661'));
    }
}
