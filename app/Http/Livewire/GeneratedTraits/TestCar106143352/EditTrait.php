<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar106143352;

use App\Models\TestCar106143352;
                use App\Models\TestCar2515065641;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2515065641s;
            
    public TestCar106143352 $testCar106143352;

    public function mount(TestCar106143352 $testCar106143352)
    {
        $this->testCar106143352 = $testCar106143352;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar106143352->save();

        return redirect()->route('laragentestCar106143352s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar106143352.test' => [
                                                                                                                ],
                                                'testCar106143352.edyth_wyman_jr._id' => [
                                                                                                                ],
                    ];
    }
}
