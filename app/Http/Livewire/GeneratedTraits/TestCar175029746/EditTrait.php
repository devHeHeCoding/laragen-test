<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar175029746;

use App\Models\TestCar175029746;
                use App\Models\TestCar21264516616;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar175029746 $testCar175029746;

                                            
    public function mount(TestCar175029746 $testCar175029746)
    {
        $this->testCar175029746 = $testCar175029746;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar175029746->save();

        return redirect()->route('laragen.admin.test_car175029746s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar175029746.test' => [
                                                                                                                ],
                                                'testCar175029746.prof._izaiah_robel_v_id' => [
                                                                                                                ],
                    ];
    }
}
