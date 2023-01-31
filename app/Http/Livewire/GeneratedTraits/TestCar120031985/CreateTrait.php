<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar120031985;

use App\Models\TestCar120031985;
                use App\Models\TestCar2789241591;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar120031985 $testCar120031985;

                                            
    public function mount(TestCar120031985 $testCar120031985)
    {
        $this->testCar120031985 = $testCar120031985;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar120031985->save();

        return redirect()->route('laragen.admin.test_car120031985s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar120031985.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar120031985.susie_goldner_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
