<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1157138218;

use App\Models\TestCar1157138218;
use App\Models\TestCar2116566326;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1157138218 $testCar1157138218;

                        
    public function mount(TestCar1157138218 $testCar1157138218)
    {
        $this->testCar1157138218 = $testCar1157138218;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1157138218.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1157138218->save();

        return redirect()->route('laragen.admin.test_car1157138218s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1157138218.test' => [
                                                                                ],
                                                                    'testCar1157138218.shanie_deckow_id' => [
                                                                                ],
                    ];
    }
}
