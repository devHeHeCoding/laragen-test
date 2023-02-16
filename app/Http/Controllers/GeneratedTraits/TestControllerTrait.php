<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar822257703;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar822257703.index');
    }

    public function create()
    {
        return view('admin.testcar822257703.create');
    }

    public function edit(TestCar822257703 $testCar822257703)
    {
        return view('admin.testcar822257703.edit', compact('testCar822257703'));
    }

    public function show(TestCar822257703 $testCar822257703)
    {
        return view('admin.testcar822257703.show', compact('testCar822257703'));
    }
}
