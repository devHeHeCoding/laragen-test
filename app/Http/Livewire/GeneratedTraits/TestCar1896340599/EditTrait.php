<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1896340599;

use App\Models\TestCar1896340599;
                use App\Models\TestCar21788287015;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21788287015s;
            
    public TestCar1896340599 $testCar1896340599;

    public function mount(TestCar1896340599 $testCar1896340599)
    {
        $this->testCar1896340599 = $testCar1896340599;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1896340599->save();

        return redirect()->route('laragentest_car1896340599s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1896340599.test' => [
                                                                                                                ],
                                                'testCar1896340599.prof._gunner_olson_id' => [
                                                                                                                ],
                    ];
    }
}
