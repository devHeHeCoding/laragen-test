<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2105946856;

use App\Models\TestCar2105946856;
                use App\Models\TestCar2105965217;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2105946856 $testCar2105946856;

                                    public Collection $testCar2105965217s;
            
    public function mount(TestCar2105946856 $testCar2105946856)
    {
        $this->testCar2105946856 = $testCar2105946856;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2105946856->save();

        return redirect()->route('laragentestCar2105946856s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2105946856.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2105946856.hoyt_armstrong_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
