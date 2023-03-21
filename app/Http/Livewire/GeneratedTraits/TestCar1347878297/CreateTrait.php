<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1347878297;

use App\Models\TestCar1347878297;
use App\Models\TestCar21070472401;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1347878297 $testCar1347878297;

                        
    public function mount(TestCar1347878297 $testCar1347878297)
    {
        $this->testCar1347878297 = $testCar1347878297;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1347878297.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1347878297->save();

        return redirect()->route('laragen.admin.test_car1347878297s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1347878297.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1347878297.halle_o&#039;_keefe_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
