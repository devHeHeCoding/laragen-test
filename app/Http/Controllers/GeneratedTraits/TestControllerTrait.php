<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2104781049;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2104781049.index');
    }

    public function create()
    {
        return view('admin.testcar2104781049.create');
    }

    public function edit(TestCar2104781049 $testcar2104781049)
    {
        return view('admin.testcar2104781049.edit', compact('testcar2104781049'));
    }

    public function show(TestCar2104781049 $testcar2104781049)
    {
        return view('admin.testcar2104781049.show', compact('testcar2104781049'));
    }
}
