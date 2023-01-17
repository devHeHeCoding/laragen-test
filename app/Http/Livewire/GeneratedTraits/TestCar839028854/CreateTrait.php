<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar839028854;

use App\Models\TestCar839028854;
                use App\Models\TestCar2386121899;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar839028854 $testCar839028854;

                                    public Collection $testCar2386121899s;
            
    public function mount(TestCar839028854 $testCar839028854)
    {
        $this->testCar839028854 = $testCar839028854;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar839028854->save();

        return redirect()->route('laragentestCar839028854s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar839028854.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar839028854.dr._sidney_nader_sr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
