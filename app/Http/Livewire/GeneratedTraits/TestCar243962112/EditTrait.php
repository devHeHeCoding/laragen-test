<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar243962112;

use App\Models\TestCar243962112;
                use App\Models\TestCar271588989;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar271588989s;
            
    public TestCar243962112 $testCar243962112;

    public function mount(TestCar243962112 $testCar243962112)
    {
        $this->testCar243962112 = $testCar243962112;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar243962112->save();

        return redirect()->route('laragentestCar243962112.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar243962112.test' => [
                                                                                                                ],
                                                'testCar243962112.dorthy_altenwerth_id' => [
                                                                                                                ],
                    ];
    }
}
