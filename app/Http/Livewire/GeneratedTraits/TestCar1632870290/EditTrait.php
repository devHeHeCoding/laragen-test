<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1632870290;

use App\Models\TestCar1632870290;
                use App\Models\TestCar21742856073;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21742856073s;
            
    public TestCar1632870290 $testCar1632870290;

    public function mount(TestCar1632870290 $testCar1632870290)
    {
        $this->testCar1632870290 = $testCar1632870290;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1632870290->save();

        return redirect()->route('laragentest_car1632870290s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1632870290.test' => [
                                                                                                                ],
                                                'testCar1632870290.prof._adam_waelchi_id' => [
                                                                                                                ],
                    ];
    }
}
