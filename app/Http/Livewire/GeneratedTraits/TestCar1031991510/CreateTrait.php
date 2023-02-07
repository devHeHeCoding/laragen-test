<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1031991510;

use App\Models\TestCar1031991510;
                    use App\Models\TestCar2743089764;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1031991510 $testCar1031991510;

                                            
    public function mount(TestCar1031991510 $testCar1031991510)
    {
        $this->testCar1031991510 = $testCar1031991510;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1031991510.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1031991510->save();

        return redirect()->route('laragen.admin.test_car1031991510s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1031991510.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1031991510.jayce_fadel_jr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
