<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar48801496;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar48801496.index');
    }

    public function create()
    {
        return view('admin.testcar48801496.create');
    }

    public function edit(TestCar48801496 $testCar48801496)
    {
        return view('admin.testcar48801496.edit', compact('testCar48801496'));
    }

    public function show(TestCar48801496 $testCar48801496)
    {
        return view('admin.testcar48801496.show', compact('testCar48801496'));
    }
}
