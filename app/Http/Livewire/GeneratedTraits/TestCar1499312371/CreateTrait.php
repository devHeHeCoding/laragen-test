<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1499312371;

use App\Models\TestCar1499312371;
                use App\Models\TestCar2527116558;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1499312371 $testCar1499312371;

                                            
    public function mount(TestCar1499312371 $testCar1499312371)
    {
        $this->testCar1499312371 = $testCar1499312371;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1499312371->save();

        return redirect()->route('laragen.admin.test_car1499312371s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1499312371.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1499312371.dr._porter_ryan_jr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
