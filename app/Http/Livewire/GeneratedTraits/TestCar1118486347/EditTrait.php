<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1118486347;

use App\Models\TestCar1118486347;
                use App\Models\TestCar2342427639;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2342427639s;
            
    public TestCar1118486347 $testCar1118486347;

    public function mount(TestCar1118486347 $testCar1118486347)
    {
        $this->testCar1118486347 = $testCar1118486347;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1118486347->save();

        return redirect()->route('laragentestCar1118486347.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1118486347.test' => [
                                                                                                                ],
                                                'testCar1118486347.ines_legros_id' => [
                                                                                                                ],
                    ];
    }
}
