<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2088279885;

use App\Models\TestCar2088279885;
                use App\Models\TestCar21500636216;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2088279885 $testCar2088279885;

                                            
    public function mount(TestCar2088279885 $testCar2088279885)
    {
        $this->testCar2088279885 = $testCar2088279885;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar2088279885->save();

        return redirect()->route('laragen.admin.test_car2088279885s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2088279885.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2088279885.dr._lawrence_o&#039;_reilly_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
