<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2097014541;

use App\Models\TestCar2097014541;
                use App\Models\TestCar2958207552;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2097014541 $testCar2097014541;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2097014541->save();

        return redirect()->route('admin.testCar2097014541.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2097014541.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2097014541.dr._sedrick_gerhold_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
