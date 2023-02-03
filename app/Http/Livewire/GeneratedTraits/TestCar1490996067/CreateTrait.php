<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1490996067;

use App\Models\TestCar1490996067;
                use App\Models\TestCar2892354326;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1490996067 $testCar1490996067;

                                            
    public function mount(TestCar1490996067 $testCar1490996067)
    {
        $this->testCar1490996067 = $testCar1490996067;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1490996067->save();

        return redirect()->route('laragen.admin.test_car1490996067s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1490996067.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1490996067.shemar_ankunding_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
