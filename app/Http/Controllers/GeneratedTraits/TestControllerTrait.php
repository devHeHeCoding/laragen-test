<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar12319279;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar12319279.index');
    }

    public function create()
    {
        return view('admin.testcar12319279.create');
    }

    public function edit(TestCar12319279 $testCar12319279)
    {
        return view('admin.testcar12319279.edit', compact('testCar12319279'));
    }

    public function show(TestCar12319279 $testCar12319279)
    {
        return view('admin.testcar12319279.show', compact('testCar12319279'));
    }
}
