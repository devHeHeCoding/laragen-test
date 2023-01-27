<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar90856639;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar90856639.index');
    }

    public function create()
    {
        return view('admin.testcar90856639.create');
    }

    public function edit(TestCar90856639 $testCar90856639)
    {
        return view('admin.testcar90856639.edit', compact('testCar90856639'));
    }

    public function show(TestCar90856639 $testCar90856639)
    {
        return view('admin.testcar90856639.show', compact('testCar90856639'));
    }
}
