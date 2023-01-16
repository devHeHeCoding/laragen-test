<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2141572300;

use App\Models\TestCar2141572300;
                use App\Models\TestCar22062559980;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2141572300 $testCar2141572300;

                                    public Collection $testCar22062559980s;
            
    public function mount(TestCar2141572300 $testCar2141572300)
    {
        $this->testCar2141572300 = $testCar2141572300;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2141572300->save();

        return redirect()->route('laragentestCar2141572300s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2141572300.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2141572300.prof._adonis_koelpin_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
