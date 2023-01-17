<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar472101621;

use App\Models\TestCar472101621;
                use App\Models\TestCar21761596104;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21761596104s;
            
    public TestCar472101621 $testCar472101621;

    public function mount(TestCar472101621 $testCar472101621)
    {
        $this->testCar472101621 = $testCar472101621;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar472101621->save();

        return redirect()->route('laragentest_car472101621s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar472101621.test' => [
                                                                                                                ],
                                                'testCar472101621.mrs._carissa_schowalter_i_v_id' => [
                                                                                                                ],
                    ];
    }
}
