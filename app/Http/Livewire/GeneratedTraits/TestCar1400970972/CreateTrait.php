<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1400970972;

use App\Models\TestCar1400970972;
use App\Models\TestCar21212099453;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1400970972 $testCar1400970972;

                        
    public function mount(TestCar1400970972 $testCar1400970972)
    {
        $this->testCar1400970972 = $testCar1400970972;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1400970972.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1400970972->save();

        return redirect()->route('laragen.admin.test_car1400970972s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1400970972.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1400970972.nyasia_rath_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
