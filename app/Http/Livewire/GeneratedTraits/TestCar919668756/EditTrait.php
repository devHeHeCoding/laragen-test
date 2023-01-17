<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar919668756;

use App\Models\TestCar919668756;
                use App\Models\TestCar22032256201;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar22032256201s;
            
    public TestCar919668756 $testCar919668756;

    public function mount(TestCar919668756 $testCar919668756)
    {
        $this->testCar919668756 = $testCar919668756;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar919668756->save();

        return redirect()->route('laragentest_car919668756s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar919668756.test' => [
                                                                                                                ],
                                                'testCar919668756.tremaine_ankunding_id' => [
                                                                                                                ],
                    ];
    }
}
