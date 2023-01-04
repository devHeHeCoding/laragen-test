<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1236519354;

use App\Models\TestCar1236519354;
                use App\Models\TestCar2519464470;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1236519354 $testCar1236519354;

    public function mount(TestCar1236519354 $testCar1236519354)
    {
        $this->testCar1236519354 = $testCar1236519354;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1236519354->save();

        return redirect()->route('admin.testCar1236519354.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1236519354.test' => [
                                                                                                                ],
                                                'testCar1236519354.sandrine_balistreri_m_d_id' => [
                                                                                                                ],
                    ];
    }
}
