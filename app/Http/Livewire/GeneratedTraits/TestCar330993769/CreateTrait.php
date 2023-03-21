<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar330993769;

use App\Models\TestCar330993769;
use App\Models\TestCar2297571773;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar330993769 $testCar330993769;

                        
    public function mount(TestCar330993769 $testCar330993769)
    {
        $this->testCar330993769 = $testCar330993769;
                                }

    public function render()
    {
        return view('livewire.generated.test-car330993769.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar330993769->save();

        return redirect()->route('laragen.admin.test_car330993769s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar330993769.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar330993769.lera_powlowski_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
