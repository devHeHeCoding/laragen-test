<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1299909494;

use App\Models\TestCar1299909494;
                use App\Models\TestCar2409047978;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1299909494 $testCar1299909494;

                                            
    public function mount(TestCar1299909494 $testCar1299909494)
    {
        $this->testCar1299909494 = $testCar1299909494;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1299909494->save();

        return redirect()->route('laragen.admin.test_car1299909494s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1299909494.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1299909494.halie_okuneva_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
