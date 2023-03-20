<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1186187951;

use App\Models\TestCar1186187951;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1186187951 $testCar1186187951;

    
    public function mount(TestCar1186187951 $testCar1186187951)
    {
        $this->testCar1186187951 = $testCar1186187951;
            }

    public function render()
    {
        return view('livewire.generated.test-car1186187951.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1186187951->save();

        return redirect()->route('laragen.admin.test_car1186187951s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1186187951.test' => [
                                                                                ],
                    ];
    }
}
