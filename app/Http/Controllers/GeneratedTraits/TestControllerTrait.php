<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1694504889;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1694504889.index');
    }

    public function create()
    {
        return view('admin.testcar1694504889.create');
    }

    public function edit(TestCar1694504889 $testCar1694504889)
    {
        return view('admin.testcar1694504889.edit', compact('testCar1694504889'));
    }

    public function show(TestCar1694504889 $testCar1694504889)
    {
        return view('admin.testcar1694504889.show', compact('testCar1694504889'));
    }
}
