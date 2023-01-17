<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1424310117;

use App\Models\TestCar1424310117;
                use App\Models\TestCar21579245629;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21579245629s;
            
    public TestCar1424310117 $testCar1424310117;

    public function mount(TestCar1424310117 $testCar1424310117)
    {
        $this->testCar1424310117 = $testCar1424310117;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1424310117->save();

        return redirect()->route('laragentestCar1424310117s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1424310117.test' => [
                                                                                                                ],
                                                'testCar1424310117.remington_bailey_i_id' => [
                                                                                                                ],
                    ];
    }
}
