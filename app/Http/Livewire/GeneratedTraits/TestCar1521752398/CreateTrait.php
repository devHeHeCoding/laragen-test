<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1521752398;

use App\Models\TestCar1521752398;
                use App\Models\TestCar235176304;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1521752398 $testCar1521752398;

                                    public Collection $testCar235176304s;
            
    public function mount(TestCar1521752398 $testCar1521752398)
    {
        $this->testCar1521752398 = $testCar1521752398;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1521752398->save();

        return redirect()->route('laragentest_car1521752398s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1521752398.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1521752398.mrs._odie_trantow_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
