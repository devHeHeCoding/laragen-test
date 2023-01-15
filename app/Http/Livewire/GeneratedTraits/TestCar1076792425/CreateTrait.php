<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1076792425;

use App\Models\TestCar1076792425;
                use App\Models\TestCar2396308069;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1076792425 $testCar1076792425;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1076792425->save();

        return redirect()->route('admin.testCar1076792425.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1076792425.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1076792425.orland_ritchie_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
