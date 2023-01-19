<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar346650498;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar346650498.index');
    }

    public function create()
    {
        return view('admin.testcar346650498.create');
    }

    public function edit(TestCar346650498 $testcar346650498)
    {
        return view('admin.testcar346650498.edit', compact('testcar346650498'));
    }

    public function show(TestCar346650498 $testcar346650498)
    {
        return view('admin.testcar346650498.show', compact('testcar346650498'));
    }
}
