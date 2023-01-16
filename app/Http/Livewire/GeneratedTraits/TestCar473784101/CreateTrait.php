<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar473784101;

use App\Models\TestCar473784101;
                use App\Models\TestCar2830494284;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar473784101 $testCar473784101;

                                    public Collection $testCar2830494284s;
            
    public function mount(TestCar473784101 $testCar473784101)
    {
        $this->testCar473784101 = $testCar473784101;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar473784101->save();

        return redirect()->route('laragentestCar473784101s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar473784101.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar473784101.mr._jaylon_d&#039;_amore_sr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
