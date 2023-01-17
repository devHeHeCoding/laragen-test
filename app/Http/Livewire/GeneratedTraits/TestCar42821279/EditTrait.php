<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar42821279;

use App\Models\TestCar42821279;
                use App\Models\TestCar2110571407;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2110571407s;
            
    public TestCar42821279 $testCar42821279;

    public function mount(TestCar42821279 $testCar42821279)
    {
        $this->testCar42821279 = $testCar42821279;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar42821279->save();

        return redirect()->route('laragentestCar42821279s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar42821279.test' => [
                                                                                                                ],
                                                'testCar42821279.greyson_kessler_id' => [
                                                                                                                ],
                    ];
    }
}
