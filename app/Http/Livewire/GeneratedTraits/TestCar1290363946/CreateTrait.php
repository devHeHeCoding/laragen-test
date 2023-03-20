<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1290363946;

use App\Models\TestCar1290363946;
use App\Models\TestCar2448467462;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1290363946 $testCar1290363946;

                        
    public function mount(TestCar1290363946 $testCar1290363946)
    {
        $this->testCar1290363946 = $testCar1290363946;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1290363946.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1290363946->save();

        return redirect()->route('laragen.admin.test_car1290363946s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1290363946.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1290363946.isadore_romaguera_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
