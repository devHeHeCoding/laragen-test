<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1472809731;

use App\Models\TestCar1472809731;
                use App\Models\TestCar2183601022;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1472809731 $testCar1472809731;

                                            
    public function mount(TestCar1472809731 $testCar1472809731)
    {
        $this->testCar1472809731 = $testCar1472809731;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1472809731->save();

        return redirect()->route('laragen.admin.test_car1472809731s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1472809731.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1472809731.alba_ortiz_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
