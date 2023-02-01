<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1746530194;

use App\Models\TestCar1746530194;
                use App\Models\TestCar21104919880;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1746530194 $testCar1746530194;

                                            
    public function mount(TestCar1746530194 $testCar1746530194)
    {
        $this->testCar1746530194 = $testCar1746530194;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1746530194->save();

        return redirect()->route('laragen.admin.test_car1746530194s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1746530194.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1746530194.nedra_watsica_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
