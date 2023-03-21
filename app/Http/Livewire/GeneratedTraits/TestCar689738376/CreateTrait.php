<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar689738376;

use App\Models\TestCar689738376;
use App\Models\TestCar2404538458;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar689738376 $testCar689738376;

                        
    public function mount(TestCar689738376 $testCar689738376)
    {
        $this->testCar689738376 = $testCar689738376;
                                }

    public function render()
    {
        return view('livewire.generated.test-car689738376.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar689738376->save();

        return redirect()->route('laragen.admin.test_car689738376s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar689738376.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar689738376.vincent_wisoky_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
