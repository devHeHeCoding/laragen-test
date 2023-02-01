<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar856968336;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar856968336.index');
    }

    public function create()
    {
        return view('admin.testcar856968336.create');
    }

    public function edit(TestCar856968336 $testCar856968336)
    {
        return view('admin.testcar856968336.edit', compact('testCar856968336'));
    }

    public function show(TestCar856968336 $testCar856968336)
    {
        return view('admin.testcar856968336.show', compact('testCar856968336'));
    }
}
