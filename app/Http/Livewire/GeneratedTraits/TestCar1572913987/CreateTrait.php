<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1572913987;

use App\Models\TestCar1572913987;
                use App\Models\TestCar2328349200;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1572913987 $testCar1572913987;

                                            
    public function mount(TestCar1572913987 $testCar1572913987)
    {
        $this->testCar1572913987 = $testCar1572913987;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1572913987->save();

        return redirect()->route('laragen.admin.test_car1572913987s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1572913987.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1572913987.prof._alexzander_wilkinson_i_v_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
