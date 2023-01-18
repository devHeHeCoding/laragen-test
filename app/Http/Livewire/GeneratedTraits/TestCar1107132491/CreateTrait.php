<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1107132491;

use App\Models\TestCar1107132491;
                use App\Models\TestCar22108630887;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1107132491 $testCar1107132491;

                                    public Collection $testCar22108630887s;
            
    public function mount(TestCar1107132491 $testCar1107132491)
    {
        $this->testCar1107132491 = $testCar1107132491;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1107132491->save();

        return redirect()->route('laragentest_car1107132491s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1107132491.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1107132491.brent_stokes_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
