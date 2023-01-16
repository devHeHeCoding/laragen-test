<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1440844221;

use App\Models\TestCar1440844221;
                use App\Models\TestCar2953424770;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1440844221 $testCar1440844221;

                                    public Collection $testCar2953424770s;
            
    public function mount(TestCar1440844221 $testCar1440844221)
    {
        $this->testCar1440844221 = $testCar1440844221;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1440844221->save();

        return redirect()->route('laragentestCar1440844221s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1440844221.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1440844221.herminia_leuschke_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
