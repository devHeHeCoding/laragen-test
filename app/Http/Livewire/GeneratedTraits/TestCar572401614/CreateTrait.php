<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar572401614;

use App\Models\TestCar572401614;
                    use App\Models\TestCar21456753527;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar572401614 $testCar572401614;

                                            
    public function mount(TestCar572401614 $testCar572401614)
    {
        $this->testCar572401614 = $testCar572401614;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car572401614.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar572401614->save();

        return redirect()->route('laragen.admin.test_car572401614s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar572401614.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar572401614.prof._aurelie_halvorson_m_d_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
