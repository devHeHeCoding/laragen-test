<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1259655170;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1259655170.index');
    }

    public function create()
    {
        return view('admin.testcar1259655170.create');
    }

    public function edit(TestCar1259655170 $testcar1259655170)
    {
        return view('admin.testcar1259655170.edit', compact('testcar1259655170'));
    }

    public function show(TestCar1259655170 $testcar1259655170)
    {
        return view('admin.testcar1259655170.show', compact('testcar1259655170'));
    }
}
