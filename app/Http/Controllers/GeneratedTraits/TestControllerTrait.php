<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar241019467;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar241019467.index');
    }

    public function create()
    {
        return view('admin.testcar241019467.create');
    }

    public function edit(TestCar241019467 $testCar241019467)
    {
        return view('admin.testcar241019467.edit', compact('testCar241019467'));
    }

    public function show(TestCar241019467 $testCar241019467)
    {
        return view('admin.testcar241019467.show', compact('testCar241019467'));
    }
}
