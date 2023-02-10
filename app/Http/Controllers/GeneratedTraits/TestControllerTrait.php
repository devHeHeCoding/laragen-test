<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1624949126;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1624949126.index');
    }

    public function create()
    {
        return view('admin.testcar1624949126.create');
    }

    public function edit(TestCar1624949126 $testCar1624949126)
    {
        return view('admin.testcar1624949126.edit', compact('testCar1624949126'));
    }

    public function show(TestCar1624949126 $testCar1624949126)
    {
        return view('admin.testcar1624949126.show', compact('testCar1624949126'));
    }
}
