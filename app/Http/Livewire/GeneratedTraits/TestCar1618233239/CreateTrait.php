<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1618233239;

use App\Models\TestCar1618233239;
                use App\Models\TestCar21116646297;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1618233239 $testCar1618233239;

                                            
    public function mount(TestCar1618233239 $testCar1618233239)
    {
        $this->testCar1618233239 = $testCar1618233239;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1618233239->save();

        return redirect()->route('laragen.admin.test_car1618233239s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1618233239.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1618233239.chyna_dare_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
