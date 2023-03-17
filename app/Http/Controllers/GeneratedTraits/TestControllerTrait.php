<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1215803700;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1215803700.index');
    }

    public function create()
    {
        return view('admin.testcar1215803700.create');
    }

    public function edit(TestCar1215803700 $testCar1215803700)
    {
        return view('admin.testcar1215803700.edit', compact('testCar1215803700'));
    }

    public function show(TestCar1215803700 $testCar1215803700)
    {
        return view('admin.testcar1215803700.show', compact('testCar1215803700'));
    }
}
