<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar11382236;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar11382236.index');
    }

    public function create()
    {
        return view('admin.testcar11382236.create');
    }

    public function edit(TestCar11382236 $testCar11382236)
    {
        return view('admin.testcar11382236.edit', compact('testCar11382236'));
    }

    public function show(TestCar11382236 $testCar11382236)
    {
        return view('admin.testcar11382236.show', compact('testCar11382236'));
    }
}
