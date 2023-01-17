<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar472101621;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar472101621.index');
    }

    public function create()
    {
        return view('admin.testcar472101621.create');
    }

    public function edit(TestCar472101621 $testcar472101621)
    {
        return view('admin.testcar472101621.edit', compact('testcar472101621'));
    }

    public function show(TestCar472101621 $testcar472101621)
    {
        return view('admin.testcar472101621.show', compact('testcar472101621'));
    }
}
