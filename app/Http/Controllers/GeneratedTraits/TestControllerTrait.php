<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1761529517;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1761529517.index');
    }

    public function create()
    {
        return view('admin.testcar1761529517.create');
    }

    public function edit(TestCar1761529517 $testCar1761529517)
    {
        return view('admin.testcar1761529517.edit', compact('testCar1761529517'));
    }

    public function show(TestCar1761529517 $testCar1761529517)
    {
        return view('admin.testcar1761529517.show', compact('testCar1761529517'));
    }
}
