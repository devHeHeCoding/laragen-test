<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar54600968;

use App\Models\TestCar54600968;
                use App\Models\TestCar21033436741;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar54600968 $testCar54600968;

                                            
    public function mount(TestCar54600968 $testCar54600968)
    {
        $this->testCar54600968 = $testCar54600968;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar54600968->save();

        return redirect()->route('laragen.admin.test_car54600968s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar54600968.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar54600968.ms._annabell_lindgren_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
