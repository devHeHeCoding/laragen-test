<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1706888482;

use App\Models\TestCar1706888482;
                use App\Models\TestCar22115591138;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1706888482 $testCar1706888482;

                                    public Collection $testCar22115591138s;
            
    public function mount(TestCar1706888482 $testCar1706888482)
    {
        $this->testCar1706888482 = $testCar1706888482;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1706888482->save();

        return redirect()->route('laragentest_car1706888482s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1706888482.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1706888482.justice_bauch_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
