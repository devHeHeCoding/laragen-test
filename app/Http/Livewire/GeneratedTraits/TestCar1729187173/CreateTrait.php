<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1729187173;

use App\Models\TestCar1729187173;
                    use App\Models\TestCar22058410205;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1729187173 $testCar1729187173;

                                            
    public function mount(TestCar1729187173 $testCar1729187173)
    {
        $this->testCar1729187173 = $testCar1729187173;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1729187173->save();

        return redirect()->route('laragen.admin.test_car1729187173s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1729187173.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1729187173.esteban_hackett_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
