<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar878828653;

use App\Models\TestCar878828653;
                use App\Models\TestCar2130973840;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar878828653 $testCar878828653;

                                            
    public function mount(TestCar878828653 $testCar878828653)
    {
        $this->testCar878828653 = $testCar878828653;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar878828653->save();

        return redirect()->route('laragen.admin.test_car878828653s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar878828653.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar878828653.kelsi_lockman_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
