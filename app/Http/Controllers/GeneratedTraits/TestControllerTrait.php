<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1482105301;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1482105301.index');
    }

    public function create()
    {
        return view('admin.testcar1482105301.create');
    }

    public function edit(TestCar1482105301 $testCar1482105301)
    {
        return view('admin.testcar1482105301.edit', compact('testCar1482105301'));
    }

    public function show(TestCar1482105301 $testCar1482105301)
    {
        return view('admin.testcar1482105301.show', compact('testCar1482105301'));
    }
}
