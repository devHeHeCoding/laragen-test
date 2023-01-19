<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar396729212;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar396729212.index');
    }

    public function create()
    {
        return view('admin.testcar396729212.create');
    }

    public function edit(TestCar396729212 $testcar396729212)
    {
        return view('admin.testcar396729212.edit', compact('testcar396729212'));
    }

    public function show(TestCar396729212 $testcar396729212)
    {
        return view('admin.testcar396729212.show', compact('testcar396729212'));
    }
}
