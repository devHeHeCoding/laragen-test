<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1172135082;

use App\Models\TestCar1172135082;
use App\Models\TestCar22052845737;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1172135082 $testCar1172135082;

                        
    public function mount(TestCar1172135082 $testCar1172135082)
    {
        $this->testCar1172135082 = $testCar1172135082;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1172135082.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1172135082->save();

        return redirect()->route('laragen.admin.test_car1172135082s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1172135082.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1172135082.annalise_becker_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
