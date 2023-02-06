<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1323929317;

use App\Models\TestCar1323929317;
                    use App\Models\TestCar2626485518;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1323929317 $testCar1323929317;

                                            
    public function mount(TestCar1323929317 $testCar1323929317)
    {
        $this->testCar1323929317 = $testCar1323929317;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1323929317->save();

        return redirect()->route('laragen.admin.test_car1323929317s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1323929317.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1323929317.prof._philip_gutkowski_sr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
