<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2057351889;

use App\Models\TestCar2057351889;
                use App\Models\TestCar21140269534;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2057351889 $testCar2057351889;

                                    public Collection $testCar21140269534s;
            
    public function mount(TestCar2057351889 $testCar2057351889)
    {
        $this->testCar2057351889 = $testCar2057351889;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2057351889->save();

        return redirect()->route('laragentest_car2057351889s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2057351889.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2057351889.dr._marquis_kuhic_ph_d_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
