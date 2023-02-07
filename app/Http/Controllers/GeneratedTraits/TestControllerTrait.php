<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar672712618;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar672712618.index');
    }

    public function create()
    {
        return view('admin.testcar672712618.create');
    }

    public function edit(TestCar672712618 $testCar672712618)
    {
        return view('admin.testcar672712618.edit', compact('testCar672712618'));
    }

    public function show(TestCar672712618 $testCar672712618)
    {
        return view('admin.testcar672712618.show', compact('testCar672712618'));
    }
}
