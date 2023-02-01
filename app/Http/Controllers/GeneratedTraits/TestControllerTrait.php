<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1980886838;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1980886838.index');
    }

    public function create()
    {
        return view('admin.testcar1980886838.create');
    }

    public function edit(TestCar1980886838 $testCar1980886838)
    {
        return view('admin.testcar1980886838.edit', compact('testCar1980886838'));
    }

    public function show(TestCar1980886838 $testCar1980886838)
    {
        return view('admin.testcar1980886838.show', compact('testCar1980886838'));
    }
}
