<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2120145922;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2120145922.index');
    }

    public function create()
    {
        return view('admin.testcar2120145922.create');
    }

    public function edit(TestCar2120145922 $testcar2120145922)
    {
        return view('admin.testcar2120145922.edit', compact('testcar2120145922'));
    }

    public function show(TestCar2120145922 $testcar2120145922)
    {
        return view('admin.testcar2120145922.show', compact('testcar2120145922'));
    }
}
