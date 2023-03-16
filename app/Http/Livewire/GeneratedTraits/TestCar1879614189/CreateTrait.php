<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1879614189;

use App\Models\TestCar1879614189;
                    use App\Models\TestCar21990806046;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1879614189 $testCar1879614189;

                                            
    public function mount(TestCar1879614189 $testCar1879614189)
    {
        $this->testCar1879614189 = $testCar1879614189;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1879614189.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1879614189->save();

        return redirect()->route('laragen.admin.test_car1879614189s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1879614189.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1879614189.melisa_roob_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
