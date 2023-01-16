<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar973799022;

use App\Models\TestCar973799022;
                use App\Models\TestCar21190430054;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21190430054s;
            
    public TestCar973799022 $testCar973799022;

    public function mount(TestCar973799022 $testCar973799022)
    {
        $this->testCar973799022 = $testCar973799022;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar973799022->save();

        return redirect()->route('laragentestCar973799022s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar973799022.test' => [
                                                                                                                ],
                                                'testCar973799022.marcellus_schoen_jr._id' => [
                                                                                                                ],
                    ];
    }
}
