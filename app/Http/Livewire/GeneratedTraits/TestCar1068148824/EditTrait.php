<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1068148824;

use App\Models\TestCar1068148824;
                use App\Models\TestCar22145564039;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1068148824 $testCar1068148824;

    public function mount(TestCar1068148824 $testCar1068148824)
    {
        $this->testCar1068148824 = $testCar1068148824;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1068148824->save();

        return redirect()->route('admin.testCar1068148824.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1068148824.test' => [
                                                                                                                ],
                                                'testCar1068148824.mr._jalen_nitzsche_v_id' => [
                                                                                                                ],
                    ];
    }
}
