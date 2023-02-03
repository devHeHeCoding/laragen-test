<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1695960584;

use App\Models\TestCar1695960584;
                use App\Models\TestCar22001616236;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1695960584 $testCar1695960584;

                                            
    public function mount(TestCar1695960584 $testCar1695960584)
    {
        $this->testCar1695960584 = $testCar1695960584;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1695960584->save();

        return redirect()->route('laragen.admin.test_car1695960584s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1695960584.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1695960584.sammy_parisian_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
