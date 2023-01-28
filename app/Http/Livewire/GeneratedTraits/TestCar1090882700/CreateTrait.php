<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1090882700;

use App\Models\TestCar1090882700;
                use App\Models\TestCar21089212264;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1090882700 $testCar1090882700;

                                            
    public function mount(TestCar1090882700 $testCar1090882700)
    {
        $this->testCar1090882700 = $testCar1090882700;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1090882700->save();

        return redirect()->route('laragen.admin.test_car1090882700s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1090882700.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1090882700.jazmyn_homenick_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
