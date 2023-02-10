<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar847894616;

use App\Models\TestCar847894616;
                    use App\Models\TestCar2980967480;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar847894616 $testCar847894616;

                                            
    public function mount(TestCar847894616 $testCar847894616)
    {
        $this->testCar847894616 = $testCar847894616;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car847894616.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar847894616->save();

        return redirect()->route('laragen.admin.test_car847894616s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar847894616.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar847894616.miss_karlee_moore_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
