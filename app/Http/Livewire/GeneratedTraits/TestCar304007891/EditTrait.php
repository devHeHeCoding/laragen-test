<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar304007891;

use App\Models\TestCar304007891;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar304007891 $testCar304007891;

    
    public function mount(TestCar304007891 $testCar304007891)
    {
        $this->testCar304007891 = $testCar304007891;
            }

    public function render()
    {
        return view('livewire.generated.test-car304007891.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar304007891->save();

        return redirect()->route('laragen.admin.test_car304007891s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar304007891.test' => [
                                                                                ],
                    ];
    }
}
