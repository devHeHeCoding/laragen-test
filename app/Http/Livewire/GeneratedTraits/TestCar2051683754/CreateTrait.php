<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2051683754;

use App\Models\TestCar2051683754;
                use App\Models\TestCar21066029830;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2051683754 $testCar2051683754;

                                            
    public function mount(TestCar2051683754 $testCar2051683754)
    {
        $this->testCar2051683754 = $testCar2051683754;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar2051683754->save();

        return redirect()->route('laragen.admin.test_car2051683754s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2051683754.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2051683754.miss_caitlyn_reichel_sr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
