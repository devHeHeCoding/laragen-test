<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172238442;

use App\Models\TestCar172238442;
                    use App\Models\TestCar2962825571;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar172238442 $testCar172238442;

                                            
    public function mount(TestCar172238442 $testCar172238442)
    {
        $this->testCar172238442 = $testCar172238442;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car172238442.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar172238442->save();

        return redirect()->route('laragen.admin.test_car172238442s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar172238442.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar172238442.tania_lowe_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
