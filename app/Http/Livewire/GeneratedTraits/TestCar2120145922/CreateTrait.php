<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2120145922;

use App\Models\TestCar2120145922;
                use App\Models\TestCar2680815353;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2120145922 $testCar2120145922;

                                    public Collection $testCar2680815353s;
            
    public function mount(TestCar2120145922 $testCar2120145922)
    {
        $this->testCar2120145922 = $testCar2120145922;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2120145922->save();

        return redirect()->route('laragentest_car2120145922s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2120145922.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2120145922.miss_annamarie_schulist_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
