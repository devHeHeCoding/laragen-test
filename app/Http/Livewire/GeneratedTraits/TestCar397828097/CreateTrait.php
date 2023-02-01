<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar397828097;

use App\Models\TestCar397828097;
                use App\Models\TestCar21386383534;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar397828097 $testCar397828097;

                                            
    public function mount(TestCar397828097 $testCar397828097)
    {
        $this->testCar397828097 = $testCar397828097;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar397828097->save();

        return redirect()->route('laragen.admin.test_car397828097s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar397828097.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar397828097.kelli_hilpert_i_i_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
