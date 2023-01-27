<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar40686181;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar40686181.index');
    }

    public function create()
    {
        return view('admin.testcar40686181.create');
    }

    public function edit(TestCar40686181 $testCar40686181)
    {
        return view('admin.testcar40686181.edit', compact('testCar40686181'));
    }

    public function show(TestCar40686181 $testCar40686181)
    {
        return view('admin.testcar40686181.show', compact('testCar40686181'));
    }
}
