<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1754839414;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1754839414.index');
    }

    public function create()
    {
        return view('admin.testcar1754839414.create');
    }

    public function edit(TestCar1754839414 $testCar1754839414)
    {
        return view('admin.testcar1754839414.edit', compact('testCar1754839414'));
    }

    public function show(TestCar1754839414 $testCar1754839414)
    {
        return view('admin.testcar1754839414.show', compact('testCar1754839414'));
    }
}
