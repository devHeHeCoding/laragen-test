<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1651712778;

use App\Models\TestCar1651712778;
                use App\Models\TestCar21978836217;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1651712778 $testCar1651712778;

                                            
    public function mount(TestCar1651712778 $testCar1651712778)
    {
        $this->testCar1651712778 = $testCar1651712778;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1651712778->save();

        return redirect()->route('laragen.admin.test_car1651712778s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1651712778.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1651712778.jimmie_moen_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
