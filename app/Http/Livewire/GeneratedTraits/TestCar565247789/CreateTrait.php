<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar565247789;

use App\Models\TestCar565247789;
                use App\Models\TestCar21245990123;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar565247789 $testCar565247789;

                                            
    public function mount(TestCar565247789 $testCar565247789)
    {
        $this->testCar565247789 = $testCar565247789;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar565247789->save();

        return redirect()->route('laragen.admin.test_car565247789s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar565247789.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar565247789.arnold_cummerata_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
