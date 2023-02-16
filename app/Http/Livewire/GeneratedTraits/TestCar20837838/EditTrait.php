<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar20837838;

use App\Models\TestCar20837838;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar20837838 $testCar20837838;

                        
    public function mount(TestCar20837838 $testCar20837838)
    {
        $this->testCar20837838 = $testCar20837838;
                                }

    public function render()
    {
        return view('livewire.generated.test-car20837838.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar20837838->save();

        return redirect()->route('laragen.admin.test_car20837838s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar20837838.test' => [
                                                                                                                ],
                    ];
    }
}
