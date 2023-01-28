<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar177062726;

use App\Models\TestCar177062726;
                use App\Models\TestCar2927580276;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar177062726 $testCar177062726;

                                            
    public function mount(TestCar177062726 $testCar177062726)
    {
        $this->testCar177062726 = $testCar177062726;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar177062726->save();

        return redirect()->route('laragen.admin.test_car177062726s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar177062726.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar177062726.ryder_rempel_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
