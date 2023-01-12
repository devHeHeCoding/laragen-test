<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1509077098;

use App\Models\TestCar1509077098;
                use App\Models\TestCar21720869940;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1509077098 $testCar1509077098;

    public function mount(TestCar1509077098 $testCar1509077098)
    {
        $this->testCar1509077098 = $testCar1509077098;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1509077098->save();

        return redirect()->route('admin.testCar1509077098.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1509077098.test' => [
                                                                                                                ],
                                                'testCar1509077098.ollie_bosco_sr._id' => [
                                                                                                                ],
                    ];
    }
}
