<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1083031205;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1083031205.index');
    }

    public function create()
    {
        return view('admin.testcar1083031205.create');
    }

    public function edit(TestCar1083031205 $testCar1083031205)
    {
        return view('admin.testcar1083031205.edit', compact('testCar1083031205'));
    }

    public function show(TestCar1083031205 $testCar1083031205)
    {
        return view('admin.testcar1083031205.show', compact('testCar1083031205'));
    }
}
