<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1254897675;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1254897675.index');
    }

    public function create()
    {
        return view('admin.testcar1254897675.create');
    }

    public function edit(TestCar1254897675 $testcar1254897675)
    {
        return view('admin.testcar1254897675.edit', compact('testcar1254897675'));
    }

    public function show(TestCar1254897675 $testcar1254897675)
    {
        return view('admin.testcar1254897675.show', compact('testcar1254897675'));
    }
}
