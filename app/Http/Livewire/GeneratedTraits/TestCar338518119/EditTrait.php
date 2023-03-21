<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar338518119;

use App\Models\TestCar338518119;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar338518119 $testCar338518119;

    
    public function mount(TestCar338518119 $testCar338518119)
    {
        $this->testCar338518119 = $testCar338518119;
            }

    public function render()
    {
        return view('livewire.generated.test-car338518119.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar338518119->save();

        return redirect()->route('laragen.admin.test_car338518119s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar338518119.test' => [
                                                                                ],
                    ];
    }
}
