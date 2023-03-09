<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar729726562;

use App\Models\TestCar729726562;
            use App\Models\TestCar21535039407;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar729726562 $testCar729726562;

                                            
    public function mount(TestCar729726562 $testCar729726562)
    {
        $this->testCar729726562 = $testCar729726562;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car729726562.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar729726562->save();

        return redirect()->route('laragen.admin.test_car729726562s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar729726562.test' => [
                                                                                ],
                                                                    'testCar729726562.ericka_nikolaus_id' => [
                                                                                ],
                    ];
    }
}
