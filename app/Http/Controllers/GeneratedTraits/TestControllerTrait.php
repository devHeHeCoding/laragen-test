<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1306769521;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1306769521.index');
    }

    public function create()
    {
        return view('admin.testcar1306769521.create');
    }

    public function edit(TestCar1306769521 $testcar1306769521)
    {
        return view('admin.testcar1306769521.edit', compact('testcar1306769521'));
    }

    public function show(TestCar1306769521 $testcar1306769521)
    {
        return view('admin.testcar1306769521.show', compact('testcar1306769521'));
    }
}
