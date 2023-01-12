<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1015982843;

use App\Models\TestCar1015982843;
                use App\Models\TestCar2354222993;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1015982843 $testCar1015982843;

    public function mount(TestCar1015982843 $testCar1015982843)
    {
        $this->testCar1015982843 = $testCar1015982843;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1015982843->save();

        return redirect()->route('admin.testCar1015982843.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1015982843.test' => [
                                                                                                                ],
                                                'testCar1015982843.rhea_west_id' => [
                                                                                                                ],
                    ];
    }
}
