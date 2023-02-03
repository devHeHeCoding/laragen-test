<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar955786819;

use App\Models\TestCar955786819;
                use App\Models\TestCar2244238395;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar955786819 $testCar955786819;

                                            
    public function mount(TestCar955786819 $testCar955786819)
    {
        $this->testCar955786819 = $testCar955786819;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar955786819->save();

        return redirect()->route('laragen.admin.test_car955786819s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar955786819.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar955786819.miss_ella_conroy_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
