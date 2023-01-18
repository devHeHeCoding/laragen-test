<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar949074142;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar949074142.index');
    }

    public function create()
    {
        return view('admin.testcar949074142.create');
    }

    public function edit(TestCar949074142 $testcar949074142)
    {
        return view('admin.testcar949074142.edit', compact('testcar949074142'));
    }

    public function show(TestCar949074142 $testcar949074142)
    {
        return view('admin.testcar949074142.show', compact('testcar949074142'));
    }
}
