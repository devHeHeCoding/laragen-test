<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar761078444;

use App\Models\TestCar761078444;
                use App\Models\TestCar2450792759;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar761078444 $testCar761078444;

                                            
    public function mount(TestCar761078444 $testCar761078444)
    {
        $this->testCar761078444 = $testCar761078444;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar761078444->save();

        return redirect()->route('laragen.admin.test_car761078444s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar761078444.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar761078444.mr._korbin_spinka_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
