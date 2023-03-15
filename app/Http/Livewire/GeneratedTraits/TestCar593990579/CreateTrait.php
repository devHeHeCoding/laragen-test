<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar593990579;

use App\Models\TestCar593990579;
use App\Models\TestCar2713417085;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar593990579 $testCar593990579;

                        
    public function mount(TestCar593990579 $testCar593990579)
    {
        $this->testCar593990579 = $testCar593990579;
                                }

    public function render()
    {
        return view('livewire.generated.test-car593990579.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar593990579->save();

        return redirect()->route('laragen.admin.test_car593990579s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar593990579.test' => [
                                                                                ],
                                                                    'testCar593990579.audreanne_murphy_id' => [
                                                                                ],
                    ];
    }
}
