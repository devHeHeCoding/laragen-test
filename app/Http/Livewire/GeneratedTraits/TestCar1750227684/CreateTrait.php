<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1750227684;

use App\Models\TestCar1750227684;
                    use App\Models\TestCar21526338626;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1750227684 $testCar1750227684;

                                            
    public function mount(TestCar1750227684 $testCar1750227684)
    {
        $this->testCar1750227684 = $testCar1750227684;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1750227684.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1750227684->save();

        return redirect()->route('laragen.admin.test_car1750227684s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1750227684.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1750227684.jaylan_volkman_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
