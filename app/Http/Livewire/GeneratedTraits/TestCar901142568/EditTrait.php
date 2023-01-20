<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar901142568;

use App\Models\TestCar901142568;
                use App\Models\TestCar2484779533;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar901142568 $testCar901142568;

                                            
    public function mount(TestCar901142568 $testCar901142568)
    {
        $this->testCar901142568 = $testCar901142568;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar901142568->save();

        return redirect()->route('laragen.admin.test_car901142568s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar901142568.test' => [
                                                                                                                ],
                                                'testCar901142568.ollie_mc_laughlin_id' => [
                                                                                                                ],
                    ];
    }
}
