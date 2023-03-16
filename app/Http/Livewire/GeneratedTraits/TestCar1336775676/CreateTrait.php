<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1336775676;

use App\Models\TestCar1336775676;
use App\Models\TestCar2482949993;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1336775676 $testCar1336775676;

                        
    public function mount(TestCar1336775676 $testCar1336775676)
    {
        $this->testCar1336775676 = $testCar1336775676;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1336775676.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1336775676->save();

        return redirect()->route('laragen.admin.test_car1336775676s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1336775676.test' => [
                                                                                ],
                                                                    'testCar1336775676.lura_hammes_id' => [
                                                                                ],
                    ];
    }
}
