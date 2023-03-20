<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar17145504;

use App\Models\TestCar17145504;
use App\Models\TestCar21354509004;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar17145504 $testCar17145504;

                        
    public function mount(TestCar17145504 $testCar17145504)
    {
        $this->testCar17145504 = $testCar17145504;
                                }

    public function render()
    {
        return view('livewire.generated.test-car17145504.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar17145504->save();

        return redirect()->route('laragen.admin.test_car17145504s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar17145504.test' => [
                                                                                ],
                                                                    'testCar17145504.dr._madelyn_o&#039;_keefe_id' => [
                                                                                ],
                    ];
    }
}
