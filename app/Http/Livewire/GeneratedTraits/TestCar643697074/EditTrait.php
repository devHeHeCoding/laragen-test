<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar643697074;

use App\Models\TestCar643697074;
                use App\Models\TestCar2363943658;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar643697074 $testCar643697074;

    public function mount(TestCar643697074 $testCar643697074)
    {
        $this->testCar643697074 = $testCar643697074;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar643697074->save();

        return redirect()->route('admin.testCar643697074.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar643697074.test' => [
                                                                                                                ],
                                                'testCar643697074.asia_schaefer_id' => [
                                                                                                                ],
                    ];
    }
}
