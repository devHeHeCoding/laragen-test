<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar686976583;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar686976583.index');
    }

    public function create()
    {
        return view('admin.testcar686976583.create');
    }

    public function edit(TestCar686976583 $testCar686976583)
    {
        return view('admin.testcar686976583.edit', compact('testCar686976583'));
    }

    public function show(TestCar686976583 $testCar686976583)
    {
        return view('admin.testcar686976583.show', compact('testCar686976583'));
    }
}
