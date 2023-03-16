<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1336775676;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1336775676.index');
    }

    public function create()
    {
        return view('admin.testcar1336775676.create');
    }

    public function edit(TestCar1336775676 $testCar1336775676)
    {
        return view('admin.testcar1336775676.edit', compact('testCar1336775676'));
    }

    public function show(TestCar1336775676 $testCar1336775676)
    {
        return view('admin.testcar1336775676.show', compact('testCar1336775676'));
    }
}
