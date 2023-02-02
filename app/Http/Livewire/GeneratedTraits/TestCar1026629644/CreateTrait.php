<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1026629644;

use App\Models\TestCar1026629644;
                use App\Models\TestCar2126819650;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1026629644 $testCar1026629644;

                                            
    public function mount(TestCar1026629644 $testCar1026629644)
    {
        $this->testCar1026629644 = $testCar1026629644;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1026629644->save();

        return redirect()->route('laragen.admin.test_car1026629644s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1026629644.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1026629644.jaycee_wilderman_d_d_s_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
