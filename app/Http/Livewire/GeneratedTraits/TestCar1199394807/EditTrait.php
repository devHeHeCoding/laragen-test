<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1199394807;

use App\Models\TestCar1199394807;
                use App\Models\TestCar2263381875;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1199394807 $testCar1199394807;

    public function mount(TestCar1199394807 $testCar1199394807)
    {
        $this->testCar1199394807 = $testCar1199394807;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1199394807->save();

        return redirect()->route('admin.testCar1199394807.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1199394807.test' => [
                                                                                                                ],
                                                'testCar1199394807.mr._owen_upton_m_d_id' => [
                                                                                                                ],
                    ];
    }
}
