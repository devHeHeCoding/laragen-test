<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar154622430;

use App\Models\TestCar154622430;
                    use App\Models\TestCar21326650999;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar154622430 $testCar154622430;

                                            
    public function mount(TestCar154622430 $testCar154622430)
    {
        $this->testCar154622430 = $testCar154622430;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car154622430.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar154622430->save();

        return redirect()->route('laragen.admin.test_car154622430s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar154622430.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar154622430.prof._gianni_price_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
