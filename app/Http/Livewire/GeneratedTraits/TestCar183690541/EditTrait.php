<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar183690541;

use App\Models\TestCar183690541;
                use App\Models\TestCar2257488949;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2257488949s;
            
    public TestCar183690541 $testCar183690541;

    public function mount(TestCar183690541 $testCar183690541)
    {
        $this->testCar183690541 = $testCar183690541;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar183690541->save();

        return redirect()->route('laragentestCar183690541s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar183690541.test' => [
                                                                                                                ],
                                                'testCar183690541.dr._jarrett_haag_sr._id' => [
                                                                                                                ],
                    ];
    }
}
