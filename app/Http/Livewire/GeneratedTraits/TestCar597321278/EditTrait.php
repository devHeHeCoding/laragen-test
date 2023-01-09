<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar597321278;

use App\Models\TestCar597321278;
                use App\Models\TestCar21722765607;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar597321278 $testCar597321278;

    public function mount(TestCar597321278 $testCar597321278)
    {
        $this->testCar597321278 = $testCar597321278;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar597321278->save();

        return redirect()->route('admin.testCar597321278.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar597321278.test' => [
                                                                                                                ],
                                                'testCar597321278.etha_nikolaus_id' => [
                                                                                                                ],
                    ];
    }
}
