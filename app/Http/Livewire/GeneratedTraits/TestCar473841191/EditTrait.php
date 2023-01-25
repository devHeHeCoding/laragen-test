<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar473841191;

use App\Models\TestCar473841191;
                use App\Models\TestCar2701021352;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar473841191 $testCar473841191;

                                            
    public function mount(TestCar473841191 $testCar473841191)
    {
        $this->testCar473841191 = $testCar473841191;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar473841191->save();

        return redirect()->route('laragen.admin.test_car473841191s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar473841191.test' => [
                                                                                                                ],
                                                'testCar473841191.lessie_mc_laughlin_id' => [
                                                                                                                ],
                    ];
    }
}
