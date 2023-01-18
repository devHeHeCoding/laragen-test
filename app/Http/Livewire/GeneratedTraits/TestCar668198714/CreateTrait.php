<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar668198714;

use App\Models\TestCar668198714;
                use App\Models\TestCar2680997544;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar668198714 $testCar668198714;

                                    public Collection $testCar2680997544s;
            
    public function mount(TestCar668198714 $testCar668198714)
    {
        $this->testCar668198714 = $testCar668198714;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar668198714->save();

        return redirect()->route('laragentest_car668198714s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar668198714.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar668198714.prof._fritz_medhurst_d_v_m_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
