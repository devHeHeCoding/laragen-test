<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar171292457;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar171292457.index');
    }

    public function create()
    {
        return view('admin.testcar171292457.create');
    }

    public function edit(TestCar171292457 $testCar171292457)
    {
        return view('admin.testcar171292457.edit', compact('testCar171292457'));
    }

    public function show(TestCar171292457 $testCar171292457)
    {
        return view('admin.testcar171292457.show', compact('testCar171292457'));
    }
}
