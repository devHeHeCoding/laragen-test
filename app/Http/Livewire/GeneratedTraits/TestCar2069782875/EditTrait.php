<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2069782875;

use App\Models\TestCar2069782875;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2069782875 $testCar2069782875;

    
    public function mount(TestCar2069782875 $testCar2069782875)
    {
        $this->testCar2069782875 = $testCar2069782875;
            }

    public function render()
    {
        return view('livewire.generated.test-car2069782875.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2069782875->save();

        return redirect()->route('laragen.admin.test_car2069782875s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2069782875.test' => [
                                                                                ],
                    ];
    }
}
