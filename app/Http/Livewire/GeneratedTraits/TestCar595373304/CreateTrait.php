<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar595373304;

use App\Models\TestCar595373304;
                use App\Models\TestCar2749242902;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar595373304 $testCar595373304;

                                            
    public function mount(TestCar595373304 $testCar595373304)
    {
        $this->testCar595373304 = $testCar595373304;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar595373304->save();

        return redirect()->route('laragen.admin.test_car595373304s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar595373304.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar595373304.tommie_jakubowski_i_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
