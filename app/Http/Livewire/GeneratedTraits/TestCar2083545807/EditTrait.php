<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2083545807;

use App\Models\TestCar2083545807;
                use App\Models\TestCar21562707733;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar2083545807 $testCar2083545807;

    public function mount(TestCar2083545807 $testCar2083545807)
    {
        $this->testCar2083545807 = $testCar2083545807;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2083545807->save();

        return redirect()->route('laragentestCar2083545807.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2083545807.test' => [
                                                                                                                ],
                                                'testCar2083545807.asha_walsh_ph_d_id' => [
                                                                                                                ],
                    ];
    }
}
