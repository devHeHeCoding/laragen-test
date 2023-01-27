<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1523639821;

use App\Models\TestCar1523639821;
                use App\Models\TestCar21755907065;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1523639821 $testCar1523639821;

                                            
    public function mount(TestCar1523639821 $testCar1523639821)
    {
        $this->testCar1523639821 = $testCar1523639821;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1523639821->save();

        return redirect()->route('laragen.admin.test_car1523639821s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1523639821.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21755907065s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
