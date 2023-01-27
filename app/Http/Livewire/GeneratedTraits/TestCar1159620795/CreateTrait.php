<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1159620795;

use App\Models\TestCar1159620795;
                use App\Models\TestCar2494943405;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1159620795 $testCar1159620795;

                                            
    public function mount(TestCar1159620795 $testCar1159620795)
    {
        $this->testCar1159620795 = $testCar1159620795;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1159620795->save();

        return redirect()->route('laragen.admin.test_car1159620795s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1159620795.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2494943405s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
