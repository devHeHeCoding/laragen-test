<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar458930252;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar458930252.index');
    }

    public function create()
    {
        return view('admin.testcar458930252.create');
    }

    public function edit(TestCar458930252 $testCar458930252)
    {
        return view('admin.testcar458930252.edit', compact('testCar458930252'));
    }

    public function show(TestCar458930252 $testCar458930252)
    {
        return view('admin.testcar458930252.show', compact('testCar458930252'));
    }
}
