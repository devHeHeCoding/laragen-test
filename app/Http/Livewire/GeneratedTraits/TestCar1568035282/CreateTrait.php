<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1568035282;

use App\Models\TestCar1568035282;
                    use App\Models\TestCar21636645964;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1568035282 $testCar1568035282;

                                            
    public function mount(TestCar1568035282 $testCar1568035282)
    {
        $this->testCar1568035282 = $testCar1568035282;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1568035282.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1568035282->save();

        return redirect()->route('laragen.admin.test_car1568035282s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1568035282.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1568035282.imani_pollich_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
