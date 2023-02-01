<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1925979731;

use App\Models\TestCar1925979731;
                use App\Models\TestCar21637257746;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1925979731 $testCar1925979731;

                                            
    public function mount(TestCar1925979731 $testCar1925979731)
    {
        $this->testCar1925979731 = $testCar1925979731;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1925979731->save();

        return redirect()->route('laragen.admin.test_car1925979731s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1925979731.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1925979731.dr._camylle_fadel_d_d_s_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
