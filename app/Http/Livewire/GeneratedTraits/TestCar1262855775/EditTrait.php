<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1262855775;

use App\Models\TestCar1262855775;
                use App\Models\TestCar21041023939;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1262855775 $testCar1262855775;

    public function mount(TestCar1262855775 $testCar1262855775)
    {
        $this->testCar1262855775 = $testCar1262855775;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1262855775->save();

        return redirect()->route('admin.testCar1262855775.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1262855775.test' => [
                                                                                                                ],
                                                'testCar1262855775.mr._elvis_windler_i_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
