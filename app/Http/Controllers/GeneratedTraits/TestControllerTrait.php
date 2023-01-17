<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar611654621;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar611654621.index');
    }

    public function create()
    {
        return view('admin.testcar611654621.create');
    }

    public function edit(TestCar611654621 $testcar611654621)
    {
        return view('admin.testcar611654621.edit', compact('testcar611654621'));
    }

    public function show(TestCar611654621 $testcar611654621)
    {
        return view('admin.testcar611654621.show', compact('testcar611654621'));
    }
}
