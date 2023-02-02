<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1703159673;

use App\Models\TestCar1703159673;
                use App\Models\TestCar22017748347;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1703159673 $testCar1703159673;

                                            
    public function mount(TestCar1703159673 $testCar1703159673)
    {
        $this->testCar1703159673 = $testCar1703159673;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1703159673->save();

        return redirect()->route('laragen.admin.test_car1703159673s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1703159673.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1703159673.brycen_ebert_ph_d_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
