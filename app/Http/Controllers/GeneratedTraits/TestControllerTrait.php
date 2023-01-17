<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2141853565;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2141853565.index');
    }

    public function create()
    {
        return view('admin.testcar2141853565.create');
    }

    public function edit(TestCar2141853565 $testcar2141853565)
    {
        return view('admin.testcar2141853565.edit', compact('testcar2141853565'));
    }

    public function show(TestCar2141853565 $testcar2141853565)
    {
        return view('admin.testcar2141853565.show', compact('testcar2141853565'));
    }
}
