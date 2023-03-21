<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1196383960;

use App\Models\TestCar1196383960;
use App\Models\TestCar21347851970;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1196383960 $testCar1196383960;

                        
    public function mount(TestCar1196383960 $testCar1196383960)
    {
        $this->testCar1196383960 = $testCar1196383960;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1196383960.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1196383960->save();

        return redirect()->route('laragen.admin.test_car1196383960s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1196383960.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1196383960.prof._alden_price_sr._id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
