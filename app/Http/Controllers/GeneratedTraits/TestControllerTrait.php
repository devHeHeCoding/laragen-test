<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar585999822;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar585999822.index');
    }

    public function create()
    {
        return view('admin.testcar585999822.create');
    }

    public function edit(TestCar585999822 $testcar585999822)
    {
        return view('admin.testcar585999822.edit', compact('testcar585999822'));
    }

    public function show(TestCar585999822 $testcar585999822)
    {
        return view('admin.testcar585999822.show', compact('testcar585999822'));
    }
}
