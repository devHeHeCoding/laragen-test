<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar77220492;

use App\Models\TestCar77220492;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar77220492 $testCar77220492;

    
    public function mount(TestCar77220492 $testCar77220492)
    {
        $this->testCar77220492 = $testCar77220492;
            }

    public function render()
    {
        return view('livewire.generated.test-car77220492.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar77220492->save();

        return redirect()->route('laragen.admin.test_car77220492s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar77220492.test' => [
                                                                                ],
                    ];
    }
}
