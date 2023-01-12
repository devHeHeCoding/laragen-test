<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar703777210;

use App\Models\TestCar703777210;
                use App\Models\TestCar2861584054;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar703777210 $testCar703777210;

    public function mount(TestCar703777210 $testCar703777210)
    {
        $this->testCar703777210 = $testCar703777210;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar703777210->save();

        return redirect()->route('admin.testCar703777210.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar703777210.test' => [
                                                                                                                ],
                                                'testCar703777210.bonita_schultz_id' => [
                                                                                                                ],
                    ];
    }
}
