<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1714286670;

use App\Models\TestCar1714286670;
                use App\Models\TestCar22104874008;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1714286670 $testCar1714286670;

                                            
    public function mount(TestCar1714286670 $testCar1714286670)
    {
        $this->testCar1714286670 = $testCar1714286670;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1714286670->save();

        return redirect()->route('laragen.admin.test_car1714286670s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1714286670.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1714286670.mr._kendall_deckow_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
