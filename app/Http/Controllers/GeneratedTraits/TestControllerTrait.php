<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1857120497;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1857120497.index');
    }

    public function create()
    {
        return view('admin.testcar1857120497.create');
    }

    public function edit(TestCar1857120497 $testCar1857120497)
    {
        return view('admin.testcar1857120497.edit', compact('testCar1857120497'));
    }

    public function show(TestCar1857120497 $testCar1857120497)
    {
        return view('admin.testcar1857120497.show', compact('testCar1857120497'));
    }
}
