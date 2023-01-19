<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1865279893;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1865279893.index');
    }

    public function create()
    {
        return view('admin.testcar1865279893.create');
    }

    public function edit(TestCar1865279893 $testcar1865279893)
    {
        return view('admin.testcar1865279893.edit', compact('testcar1865279893'));
    }

    public function show(TestCar1865279893 $testcar1865279893)
    {
        return view('admin.testcar1865279893.show', compact('testcar1865279893'));
    }
}
