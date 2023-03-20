<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1018937047;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1018937047.index');
    }

    public function create()
    {
        return view('admin.testcar1018937047.create');
    }

    public function edit(TestCar1018937047 $testCar1018937047)
    {
        return view('admin.testcar1018937047.edit', compact('testCar1018937047'));
    }

    public function show(TestCar1018937047 $testCar1018937047)
    {
        return view('admin.testcar1018937047.show', compact('testCar1018937047'));
    }
}
