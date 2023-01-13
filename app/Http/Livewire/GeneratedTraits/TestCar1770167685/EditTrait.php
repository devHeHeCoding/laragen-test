<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1770167685;

use App\Models\TestCar1770167685;
                use App\Models\TestCar21887777516;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1770167685 $testCar1770167685;

    public function mount(TestCar1770167685 $testCar1770167685)
    {
        $this->testCar1770167685 = $testCar1770167685;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1770167685->save();

        return redirect()->route('admin.testCar1770167685.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1770167685.test' => [
                                                                                                                ],
                                                'testCar1770167685.madisyn_shields_d_d_s_id' => [
                                                                                                                ],
                    ];
    }
}
