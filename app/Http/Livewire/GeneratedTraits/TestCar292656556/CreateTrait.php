<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar292656556;

use App\Models\TestCar292656556;
                use App\Models\TestCar2437231470;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar292656556 $testCar292656556;

                                    public Collection $testCar2437231470s;
            
    public function mount(TestCar292656556 $testCar292656556)
    {
        $this->testCar292656556 = $testCar292656556;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar292656556->save();

        return redirect()->route('laragentestCar292656556s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar292656556.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar292656556.katharina_nolan_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
