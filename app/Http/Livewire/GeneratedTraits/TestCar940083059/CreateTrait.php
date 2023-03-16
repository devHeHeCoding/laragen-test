<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar940083059;

use App\Models\TestCar940083059;
use App\Models\TestCar21543731479;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar940083059 $testCar940083059;

                        
    public function mount(TestCar940083059 $testCar940083059)
    {
        $this->testCar940083059 = $testCar940083059;
                                }

    public function render()
    {
        return view('livewire.generated.test-car940083059.create');
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
                                                                    'testCar940083059.americo_jacobs_v_id' => [
                                                                                ],
                    ];
    }
}
