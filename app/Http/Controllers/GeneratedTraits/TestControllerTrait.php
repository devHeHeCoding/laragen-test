<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1623121684;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1623121684.index');
    }

    public function create()
    {
        return view('admin.testcar1623121684.create');
    }

    public function edit(TestCar1623121684 $testcar1623121684)
    {
        return view('admin.testcar1623121684.edit', compact('testcar1623121684'));
    }

    public function show(TestCar1623121684 $testcar1623121684)
    {
        return view('admin.testcar1623121684.show', compact('testcar1623121684'));
    }
}
