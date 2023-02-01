<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1513758171;

use App\Models\TestCar1513758171;
                use App\Models\TestCar21969794356;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1513758171 $testCar1513758171;

                                            
    public function mount(TestCar1513758171 $testCar1513758171)
    {
        $this->testCar1513758171 = $testCar1513758171;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1513758171->save();

        return redirect()->route('laragen.admin.test_car1513758171s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1513758171.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1513758171.adah_king_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
