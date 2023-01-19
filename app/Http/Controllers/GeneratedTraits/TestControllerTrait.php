<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1758349941;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1758349941.index');
    }

    public function create()
    {
        return view('admin.testcar1758349941.create');
    }

    public function edit(TestCar1758349941 $testcar1758349941)
    {
        return view('admin.testcar1758349941.edit', compact('testcar1758349941'));
    }

    public function show(TestCar1758349941 $testcar1758349941)
    {
        return view('admin.testcar1758349941.show', compact('testcar1758349941'));
    }
}
