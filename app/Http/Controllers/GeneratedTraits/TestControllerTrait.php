<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar28334949;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar28334949.index');
    }

    public function create()
    {
        return view('admin.testcar28334949.create');
    }

    public function edit(TestCar28334949 $testcar28334949)
    {
        return view('admin.testcar28334949.edit', compact('testcar28334949'));
    }

    public function show(TestCar28334949 $testcar28334949)
    {
        return view('admin.testcar28334949.show', compact('testcar28334949'));
    }
}
