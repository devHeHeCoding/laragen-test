<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1857120497;

use App\Models\TestCar1857120497;
                use App\Models\TestCar2521726156;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1857120497 $testCar1857120497;

                                            
    public function mount(TestCar1857120497 $testCar1857120497)
    {
        $this->testCar1857120497 = $testCar1857120497;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1857120497->save();

        return redirect()->route('laragen.admin.test_car1857120497s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1857120497.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1857120497.dr._sonny_schultz_jr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
