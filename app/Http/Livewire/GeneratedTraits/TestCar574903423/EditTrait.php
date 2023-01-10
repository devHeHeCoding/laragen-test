<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar574903423;

use App\Models\TestCar574903423;
                use App\Models\TestCar21552312221;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar574903423 $testCar574903423;

    public function mount(TestCar574903423 $testCar574903423)
    {
        $this->testCar574903423 = $testCar574903423;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar574903423->save();

        return redirect()->route('admin.testCar574903423.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar574903423.test' => [
                                                                                                                ],
                                                'testCar574903423.dan_morissette_id' => [
                                                                                                                ],
                    ];
    }
}
