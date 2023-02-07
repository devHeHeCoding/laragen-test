<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1714587569;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1714587569.index');
    }

    public function create()
    {
        return view('admin.testcar1714587569.create');
    }

    public function edit(TestCar1714587569 $testCar1714587569)
    {
        return view('admin.testcar1714587569.edit', compact('testCar1714587569'));
    }

    public function show(TestCar1714587569 $testCar1714587569)
    {
        return view('admin.testcar1714587569.show', compact('testCar1714587569'));
    }
}
