<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar995898570;

use App\Models\TestCar995898570;
use App\Models\TestCar22040393320;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar995898570 $testCar995898570;

                        
    public function mount(TestCar995898570 $testCar995898570)
    {
        $this->testCar995898570 = $testCar995898570;
                                }

    public function render()
    {
        return view('livewire.generated.test-car995898570.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar995898570->save();

        return redirect()->route('laragen.admin.test_car995898570s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar995898570.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar995898570.cletus_gutmann_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
