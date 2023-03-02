<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar818681802;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar818681802.index');
    }

    public function create()
    {
        return view('admin.testcar818681802.create');
    }

    public function edit(TestCar818681802 $testCar818681802)
    {
        return view('admin.testcar818681802.edit', compact('testCar818681802'));
    }

    public function show(TestCar818681802 $testCar818681802)
    {
        return view('admin.testcar818681802.show', compact('testCar818681802'));
    }
}
