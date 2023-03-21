<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1956169116;

use App\Models\TestCar1956169116;
use App\Models\TestCar2597860687;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1956169116 $testCar1956169116;

                        
    public function mount(TestCar1956169116 $testCar1956169116)
    {
        $this->testCar1956169116 = $testCar1956169116;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1956169116.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1956169116->save();

        return redirect()->route('laragen.admin.test_car1956169116s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1956169116.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1956169116.cleve_hilpert_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
