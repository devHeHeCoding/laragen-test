<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar764087460;

use App\Models\TestCar764087460;
                use App\Models\TestCar2534320867;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2534320867s;
            
    public TestCar764087460 $testCar764087460;

    public function mount(TestCar764087460 $testCar764087460)
    {
        $this->testCar764087460 = $testCar764087460;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar764087460->save();

        return redirect()->route('laragentest_car764087460s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar764087460.test' => [
                                                                                                                ],
                                                'testCar764087460.gudrun_mc_cullough_d_d_s_id' => [
                                                                                                                ],
                    ];
    }
}
