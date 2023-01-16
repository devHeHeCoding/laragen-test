<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1018352743;

use App\Models\TestCar1018352743;
                use App\Models\TestCar2785729629;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2785729629s;
            
    public TestCar1018352743 $testCar1018352743;

    public function mount(TestCar1018352743 $testCar1018352743)
    {
        $this->testCar1018352743 = $testCar1018352743;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1018352743->save();

        return redirect()->route('laragentestCar1018352743s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1018352743.test' => [
                                                                                                                ],
                                                'testCar1018352743.ana_gottlieb_id' => [
                                                                                                                ],
                    ];
    }
}
