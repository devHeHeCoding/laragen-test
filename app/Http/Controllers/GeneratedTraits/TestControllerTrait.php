<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar29932439;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar29932439.index');
    }

    public function create()
    {
        return view('admin.testcar29932439.create');
    }

    public function edit(TestCar29932439 $testcar29932439)
    {
        return view('admin.testcar29932439.edit', compact('testcar29932439'));
    }

    public function show(TestCar29932439 $testcar29932439)
    {
        return view('admin.testcar29932439.show', compact('testcar29932439'));
    }
}
