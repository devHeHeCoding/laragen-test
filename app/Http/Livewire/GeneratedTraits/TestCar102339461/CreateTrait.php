<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar102339461;

use App\Models\TestCar102339461;
                use App\Models\TestCar2339545101;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar102339461 $testCar102339461;

                                            
    public function mount(TestCar102339461 $testCar102339461)
    {
        $this->testCar102339461 = $testCar102339461;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar102339461->save();

        return redirect()->route('laragen.admin.test_car102339461s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar102339461.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar102339461.raphael_flatley_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
