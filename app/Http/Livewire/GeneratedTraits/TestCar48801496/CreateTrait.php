<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar48801496;

use App\Models\TestCar48801496;
use App\Models\TestCar2381810580;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar48801496 $testCar48801496;

                        
    public function mount(TestCar48801496 $testCar48801496)
    {
        $this->testCar48801496 = $testCar48801496;
                                }

    public function render()
    {
        return view('livewire.generated.test-car48801496.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar48801496->save();

        return redirect()->route('laragen.admin.test_car48801496s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar48801496.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar48801496.enoch_kshlerin_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
