<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar205156679;

use App\Models\TestCar205156679;
                use App\Models\TestCar21461106501;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar205156679 $testCar205156679;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar205156679->save();

        return redirect()->route('admin.testCar205156679.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar205156679.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar205156679.cathrine_deckow_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
