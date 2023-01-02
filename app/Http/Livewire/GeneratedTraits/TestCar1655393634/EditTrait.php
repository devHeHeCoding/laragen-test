<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1655393634;

use App\Models\TestCar1655393634;
                use App\Models\TestCar2687408942;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1655393634 $testCar1655393634;

    public function mount(TestCar1655393634 $testCar1655393634)
    {
        $this->testCar1655393634 = $testCar1655393634;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1655393634->save();

        return redirect()->route('admin.testCar1655393634.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1655393634.test' => [
                                                                                                                ],
                                                'testCar1655393634.gertrude_beahan_id' => [
                                                                                                                ],
                    ];
    }
}
