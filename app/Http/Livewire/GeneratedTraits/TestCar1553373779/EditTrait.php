<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1553373779;

use App\Models\TestCar1553373779;
                use App\Models\TestCar21631545067;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21631545067s;
            
    public TestCar1553373779 $testCar1553373779;

    public function mount(TestCar1553373779 $testCar1553373779)
    {
        $this->testCar1553373779 = $testCar1553373779;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1553373779->save();

        return redirect()->route('laragentest_car1553373779s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1553373779.test' => [
                                                                                                                ],
                                                'testCar1553373779.lue_marks_id' => [
                                                                                                                ],
                    ];
    }
}
