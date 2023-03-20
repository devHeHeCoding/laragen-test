<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1382396428;

use App\Models\TestCar1382396428;
use App\Models\TestCar21886829772;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1382396428 $testCar1382396428;

                        
    public function mount(TestCar1382396428 $testCar1382396428)
    {
        $this->testCar1382396428 = $testCar1382396428;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1382396428.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1382396428->save();

        return redirect()->route('laragen.admin.test_car1382396428s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1382396428.test' => [
                                                                                ],
                                                                    'testCar1382396428.colleen_stroman_id' => [
                                                                                ],
                    ];
    }
}
