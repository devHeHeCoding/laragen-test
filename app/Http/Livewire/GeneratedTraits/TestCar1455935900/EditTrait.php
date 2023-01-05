<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1455935900;

use App\Models\TestCar1455935900;
                use App\Models\TestCar2859287200;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1455935900 $testCar1455935900;

    public function mount(TestCar1455935900 $testCar1455935900)
    {
        $this->testCar1455935900 = $testCar1455935900;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1455935900->save();

        return redirect()->route('admin.testCar1455935900.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1455935900.test' => [
                                                                                                                ],
                                                'testCar1455935900.katrina_kiehn_id' => [
                                                                                                                ],
                    ];
    }
}
