<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar925481405;

use App\Models\TestCar925481405;
            use App\Models\TestCar239438474;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar925481405 $testCar925481405;

                                            
    public function mount(TestCar925481405 $testCar925481405)
    {
        $this->testCar925481405 = $testCar925481405;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car925481405.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar925481405->save();

        return redirect()->route('laragen.admin.test_car925481405s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar925481405.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar925481405.mrs._thora_grimes_i_i_i_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
