<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1521752398;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1521752398.index');
    }

    public function create()
    {
        return view('admin.testcar1521752398.create');
    }

    public function edit(TestCar1521752398 $testcar1521752398)
    {
        return view('admin.testcar1521752398.edit', compact('testcar1521752398'));
    }

    public function show(TestCar1521752398 $testcar1521752398)
    {
        return view('admin.testcar1521752398.show', compact('testcar1521752398'));
    }
}
