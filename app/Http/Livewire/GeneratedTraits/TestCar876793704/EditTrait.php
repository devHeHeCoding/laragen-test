<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar876793704;

use App\Models\TestCar876793704;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar876793704 $testCar876793704;

    
    public function mount(TestCar876793704 $testCar876793704)
    {
        $this->testCar876793704 = $testCar876793704;
            }

    public function render()
    {
        return view('livewire.generated.test-car876793704.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar876793704->save();

        return redirect()->route('laragen.admin.test_car876793704s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar876793704.test' => [
                                                                                ],
                    ];
    }
}
