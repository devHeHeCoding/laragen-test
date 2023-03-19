<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar150542530;

use App\Models\TestCar150542530;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar150542530 $testCar150542530;

    
    public function mount(TestCar150542530 $testCar150542530)
    {
        $this->testCar150542530 = $testCar150542530;
            }

    public function render()
    {
        return view('livewire.generated.test-car150542530.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar150542530->save();

        return redirect()->route('laragen.admin.test_car150542530s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar150542530.test' => [
                                                                                ],
                    ];
    }
}
