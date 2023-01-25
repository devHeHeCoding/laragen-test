<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar313451174;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar313451174.index');
    }

    public function create()
    {
        return view('admin.testcar313451174.create');
    }

    public function edit(TestCar313451174 $testCar313451174)
    {
        return view('admin.testcar313451174.edit', compact('testCar313451174'));
    }

    public function show(TestCar313451174 $testCar313451174)
    {
        return view('admin.testcar313451174.show', compact('testCar313451174'));
    }
}
