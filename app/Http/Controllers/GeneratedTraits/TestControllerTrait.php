<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1108481991;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1108481991.index');
    }

    public function create()
    {
        return view('admin.testcar1108481991.create');
    }

    public function edit(TestCar1108481991 $testcar1108481991)
    {
        return view('admin.testcar1108481991.edit', compact('testcar1108481991'));
    }

    public function show(TestCar1108481991 $testcar1108481991)
    {
        return view('admin.testcar1108481991.show', compact('testcar1108481991'));
    }
}
