<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1607781032;

use App\Models\TestCar1607781032;
                use App\Models\TestCar21538368121;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1607781032 $testCar1607781032;

    public function mount(TestCar1607781032 $testCar1607781032)
    {
        $this->testCar1607781032 = $testCar1607781032;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1607781032->save();

        return redirect()->route('admin.testCar1607781032.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1607781032.test' => [
                                                                                                                ],
                                                'testCar1607781032.rachelle_halvorson_id' => [
                                                                                                                ],
                    ];
    }
}
