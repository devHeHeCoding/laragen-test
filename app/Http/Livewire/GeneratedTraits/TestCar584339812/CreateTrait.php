<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar584339812;

use App\Models\TestCar584339812;
                    use App\Models\TestCar2254669533;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar584339812 $testCar584339812;

                                            
    public function mount(TestCar584339812 $testCar584339812)
    {
        $this->testCar584339812 = $testCar584339812;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car584339812.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar584339812->save();

        return redirect()->route('laragen.admin.test_car584339812s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar584339812.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar584339812.dr._karen_ondricka_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
