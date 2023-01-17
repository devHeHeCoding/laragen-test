<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1140341884;

use App\Models\TestCar1140341884;
                use App\Models\TestCar21780690420;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21780690420s;
            
    public TestCar1140341884 $testCar1140341884;

    public function mount(TestCar1140341884 $testCar1140341884)
    {
        $this->testCar1140341884 = $testCar1140341884;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1140341884->save();

        return redirect()->route('laragentestCar1140341884s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1140341884.test' => [
                                                                                                                ],
                                                'testCar1140341884.fae_mayer_id' => [
                                                                                                                ],
                    ];
    }
}
