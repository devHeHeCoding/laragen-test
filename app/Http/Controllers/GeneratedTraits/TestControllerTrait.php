<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar405598449;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar405598449.index');
    }

    public function create()
    {
        return view('admin.testcar405598449.create');
    }

    public function edit(TestCar405598449 $testcar405598449)
    {
        return view('admin.testcar405598449.edit', compact('testcar405598449'));
    }

    public function show(TestCar405598449 $testcar405598449)
    {
        return view('admin.testcar405598449.show', compact('testcar405598449'));
    }
}
