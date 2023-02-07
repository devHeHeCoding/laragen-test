<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar45754642;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar45754642.index');
    }

    public function create()
    {
        return view('admin.testcar45754642.create');
    }

    public function edit(TestCar45754642 $testCar45754642)
    {
        return view('admin.testcar45754642.edit', compact('testCar45754642'));
    }

    public function show(TestCar45754642 $testCar45754642)
    {
        return view('admin.testcar45754642.show', compact('testCar45754642'));
    }
}
