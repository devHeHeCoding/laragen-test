<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2045697739;

use App\Models\TestCar2045697739;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2045697739 $testCar2045697739;

    
    public function mount(TestCar2045697739 $testCar2045697739)
    {
        $this->testCar2045697739 = $testCar2045697739;
            }

    public function render()
    {
        return view('livewire.generated.test-car2045697739.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2045697739->save();

        return redirect()->route('laragen.admin.test_car2045697739s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2045697739.test' => [
                                                                                ],
                    ];
    }
}
