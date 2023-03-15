<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1159592761;

use App\Models\TestCar1159592761;
use App\Models\TestCar2274435045;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1159592761 $testCar1159592761;

                        
    public function mount(TestCar1159592761 $testCar1159592761)
    {
        $this->testCar1159592761 = $testCar1159592761;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1159592761.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1159592761->save();

        return redirect()->route('laragen.admin.test_car1159592761s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1159592761.test' => [
                                                                                ],
                                                                    'testCar1159592761.dr._lisa_miller_jr._id' => [
                                                                                ],
                    ];
    }
}
