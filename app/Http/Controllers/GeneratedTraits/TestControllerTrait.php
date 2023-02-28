<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar655714358;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar655714358.index');
    }

    public function create()
    {
        return view('admin.testcar655714358.create');
    }

    public function edit(TestCar655714358 $testCar655714358)
    {
        return view('admin.testcar655714358.edit', compact('testCar655714358'));
    }

    public function show(TestCar655714358 $testCar655714358)
    {
        return view('admin.testcar655714358.show', compact('testCar655714358'));
    }
}
