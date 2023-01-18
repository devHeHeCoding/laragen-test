<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1623121684;

use App\Models\TestCar1623121684;
                use App\Models\TestCar2747808643;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1623121684 $testCar1623121684;

                                    public Collection $testCar2747808643s;
            
    public function mount(TestCar1623121684 $testCar1623121684)
    {
        $this->testCar1623121684 = $testCar1623121684;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1623121684->save();

        return redirect()->route('laragen.admin.test_car1623121684s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1623121684.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1623121684.dr._willow_reichel_jr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
