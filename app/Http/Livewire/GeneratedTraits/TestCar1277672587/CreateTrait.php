<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1277672587;

use App\Models\TestCar1277672587;
                use App\Models\TestCar21192258690;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1277672587 $testCar1277672587;

                                            
    public function mount(TestCar1277672587 $testCar1277672587)
    {
        $this->testCar1277672587 = $testCar1277672587;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1277672587->save();

        return redirect()->route('laragen.admin.test_car1277672587s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1277672587.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1277672587.kris_pfannerstill_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
