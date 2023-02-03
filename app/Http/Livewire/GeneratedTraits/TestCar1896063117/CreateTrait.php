<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1896063117;

use App\Models\TestCar1896063117;
                use App\Models\TestCar21559840196;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1896063117 $testCar1896063117;

                                            
    public function mount(TestCar1896063117 $testCar1896063117)
    {
        $this->testCar1896063117 = $testCar1896063117;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1896063117->save();

        return redirect()->route('laragen.admin.test_car1896063117s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1896063117.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1896063117.wilhelm_wisoky_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
