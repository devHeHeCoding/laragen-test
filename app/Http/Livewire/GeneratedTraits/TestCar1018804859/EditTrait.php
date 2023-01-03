<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1018804859;

use App\Models\TestCar1018804859;
                use App\Models\TestCar2176916428;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1018804859 $testCar1018804859;

    public function mount(TestCar1018804859 $testCar1018804859)
    {
        $this->testCar1018804859 = $testCar1018804859;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1018804859->save();

        return redirect()->route('admin.testCar1018804859.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1018804859.test' => [
                                                                                                                ],
                                                'testCar1018804859.prof._anderson_bashirian_m_d_id' => [
                                                                                                                ],
                    ];
    }
}
