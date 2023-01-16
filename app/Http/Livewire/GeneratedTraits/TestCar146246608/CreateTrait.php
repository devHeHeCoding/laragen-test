<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar146246608;

use App\Models\TestCar146246608;
                use App\Models\TestCar2541352268;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar146246608 $testCar146246608;

                                    public Collection $testCar2541352268s;
            
    public function mount(TestCar146246608 $testCar146246608)
    {
        $this->testCar146246608 = $testCar146246608;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar146246608->save();

        return redirect()->route('laragentestCar146246608s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar146246608.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar146246608.abbey_steuber_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
