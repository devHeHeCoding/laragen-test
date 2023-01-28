<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1792318417;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1792318417.index');
    }

    public function create()
    {
        return view('admin.testcar1792318417.create');
    }

    public function edit(TestCar1792318417 $testCar1792318417)
    {
        return view('admin.testcar1792318417.edit', compact('testCar1792318417'));
    }

    public function show(TestCar1792318417 $testCar1792318417)
    {
        return view('admin.testcar1792318417.show', compact('testCar1792318417'));
    }
}
