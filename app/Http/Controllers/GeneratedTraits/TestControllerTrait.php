<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar730684024;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar730684024.index');
    }

    public function create()
    {
        return view('admin.testcar730684024.create');
    }

    public function edit(TestCar730684024 $testCar730684024)
    {
        return view('admin.testcar730684024.edit', compact('testCar730684024'));
    }

    public function show(TestCar730684024 $testCar730684024)
    {
        return view('admin.testcar730684024.show', compact('testCar730684024'));
    }
}
