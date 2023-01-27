<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar662682466;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar662682466.index');
    }

    public function create()
    {
        return view('admin.testcar662682466.create');
    }

    public function edit(TestCar662682466 $testCar662682466)
    {
        return view('admin.testcar662682466.edit', compact('testCar662682466'));
    }

    public function show(TestCar662682466 $testCar662682466)
    {
        return view('admin.testcar662682466.show', compact('testCar662682466'));
    }
}
