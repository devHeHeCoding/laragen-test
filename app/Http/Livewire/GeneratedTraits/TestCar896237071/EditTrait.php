<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar896237071;

use App\Models\TestCar896237071;
                use App\Models\TestCar2387008306;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar896237071 $testCar896237071;

    public function mount(TestCar896237071 $testCar896237071)
    {
        $this->testCar896237071 = $testCar896237071;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar896237071->save();

        return redirect()->route('admin.testCar896237071.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar896237071.test' => [
                                                                                                                ],
                                                'testCar896237071.ellie_abshire_id' => [
                                                                                                                ],
                    ];
    }
}
