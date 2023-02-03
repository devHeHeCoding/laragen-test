<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar947429955;

use App\Models\TestCar947429955;
                use App\Models\TestCar21060951672;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar947429955 $testCar947429955;

                                            
    public function mount(TestCar947429955 $testCar947429955)
    {
        $this->testCar947429955 = $testCar947429955;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar947429955->save();

        return redirect()->route('laragen.admin.test_car947429955s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar947429955.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar947429955.demarcus_schinner_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
