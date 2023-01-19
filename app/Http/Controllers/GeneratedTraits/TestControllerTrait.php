<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1687918190;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1687918190.index');
    }

    public function create()
    {
        return view('admin.testcar1687918190.create');
    }

    public function edit(TestCar1687918190 $testcar1687918190)
    {
        return view('admin.testcar1687918190.edit', compact('testcar1687918190'));
    }

    public function show(TestCar1687918190 $testcar1687918190)
    {
        return view('admin.testcar1687918190.show', compact('testcar1687918190'));
    }
}
