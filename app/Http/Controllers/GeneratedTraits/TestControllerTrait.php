<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar322315932;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar322315932.index');
    }

    public function create()
    {
        return view('admin.testcar322315932.create');
    }

    public function edit(TestCar322315932 $testcar322315932)
    {
        return view('admin.testcar322315932.edit', compact('testcar322315932'));
    }

    public function show(TestCar322315932 $testcar322315932)
    {
        return view('admin.testcar322315932.show', compact('testcar322315932'));
    }
}
