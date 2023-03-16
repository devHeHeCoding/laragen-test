<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar940083059;

use App\Models\TestCar940083059;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar940083059 $testCar940083059;

    
    public function mount(TestCar940083059 $testCar940083059)
    {
        $this->testCar940083059 = $testCar940083059;
            }

    public function render()
    {
        return view('livewire.generated.test-car940083059.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar940083059->save();

        return redirect()->route('laragen.admin.test_car940083059s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar940083059.test' => [
                                                                                ],
                    ];
    }
}
