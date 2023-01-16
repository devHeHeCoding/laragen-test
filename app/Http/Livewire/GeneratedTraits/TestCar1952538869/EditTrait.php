<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1952538869;

use App\Models\TestCar1952538869;
                use App\Models\TestCar2560124850;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2560124850s;
            
    public TestCar1952538869 $testCar1952538869;

    public function mount(TestCar1952538869 $testCar1952538869)
    {
        $this->testCar1952538869 = $testCar1952538869;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1952538869->save();

        return redirect()->route('laragentestCar1952538869s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1952538869.test' => [
                                                                                                                ],
                                                'testCar1952538869.miss_era_franecki_id' => [
                                                                                                                ],
                    ];
    }
}
