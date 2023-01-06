<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar821976173;

use App\Models\TestCar821976173;
                use App\Models\TestCar21130377400;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar821976173 $testCar821976173;

    public function mount(TestCar821976173 $testCar821976173)
    {
        $this->testCar821976173 = $testCar821976173;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar821976173->save();

        return redirect()->route('admin.testCar821976173.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar821976173.test' => [
                                                                                                                ],
                                                'testCar821976173.mrs._candace_torphy_i_id' => [
                                                                                                                ],
                    ];
    }
}
