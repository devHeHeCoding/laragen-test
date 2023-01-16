<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar53714731;

use App\Models\TestCar53714731;
                use App\Models\TestCar21273882674;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21273882674s;
            
    public TestCar53714731 $testCar53714731;

    public function mount(TestCar53714731 $testCar53714731)
    {
        $this->testCar53714731 = $testCar53714731;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar53714731->save();

        return redirect()->route('laragentestCar53714731.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar53714731.test' => [
                                                                                                                ],
                                                'testCar53714731.barney_wunsch_id' => [
                                                                                                                ],
                    ];
    }
}
