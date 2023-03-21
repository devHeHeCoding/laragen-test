<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1347878297;

use App\Models\TestCar1347878297;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1347878297 $testCar1347878297;

    
    public function mount(TestCar1347878297 $testCar1347878297)
    {
        $this->testCar1347878297 = $testCar1347878297;
            }

    public function render()
    {
        return view('livewire.generated.test-car1347878297.edit');
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
                                                                                ],
                    ];
    }
}
