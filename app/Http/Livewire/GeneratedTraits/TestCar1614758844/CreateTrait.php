<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1614758844;

use App\Models\TestCar1614758844;
                use App\Models\TestCar2651239154;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1614758844 $testCar1614758844;

                                            
    public function mount(TestCar1614758844 $testCar1614758844)
    {
        $this->testCar1614758844 = $testCar1614758844;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1614758844->save();

        return redirect()->route('laragen.admin.test_car1614758844s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1614758844.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1614758844.leora_harris_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
