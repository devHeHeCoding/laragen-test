<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1159592761;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1159592761.index');
    }

    public function create()
    {
        return view('admin.testcar1159592761.create');
    }

    public function edit(TestCar1159592761 $testCar1159592761)
    {
        return view('admin.testcar1159592761.edit', compact('testCar1159592761'));
    }

    public function show(TestCar1159592761 $testCar1159592761)
    {
        return view('admin.testcar1159592761.show', compact('testCar1159592761'));
    }
}
