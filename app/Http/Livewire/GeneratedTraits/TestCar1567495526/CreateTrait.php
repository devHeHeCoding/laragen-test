<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1567495526;

use App\Models\TestCar1567495526;
                    use App\Models\TestCar2412160001;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1567495526 $testCar1567495526;

                                            
    public function mount(TestCar1567495526 $testCar1567495526)
    {
        $this->testCar1567495526 = $testCar1567495526;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1567495526.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1567495526->save();

        return redirect()->route('laragen.admin.test_car1567495526s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1567495526.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1567495526.miss_abby_bechtelar_i_i_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
