<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar668198714;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar668198714.index');
    }

    public function create()
    {
        return view('admin.testcar668198714.create');
    }

    public function edit(TestCar668198714 $testcar668198714)
    {
        return view('admin.testcar668198714.edit', compact('testcar668198714'));
    }

    public function show(TestCar668198714 $testcar668198714)
    {
        return view('admin.testcar668198714.show', compact('testcar668198714'));
    }
}
