<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1634922198;

use App\Models\TestCar1634922198;
                use App\Models\TestCar2473548718;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1634922198 $testCar1634922198;

                                    public Collection $testCar2473548718s;
            
    public function mount(TestCar1634922198 $testCar1634922198)
    {
        $this->testCar1634922198 = $testCar1634922198;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1634922198->save();

        return redirect()->route('laragentest_car1634922198s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1634922198.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1634922198.jerome_murray_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
