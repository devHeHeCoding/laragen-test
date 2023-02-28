<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2069207647;

use App\Models\TestCar2069207647;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2069207647 $testCar2069207647;

                        
    public function mount(TestCar2069207647 $testCar2069207647)
    {
        $this->testCar2069207647 = $testCar2069207647;
                                }

    public function render()
    {
        return view('livewire.generated.test-car2069207647.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2069207647->save();

        return redirect()->route('laragen.admin.test_car2069207647s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2069207647.test' => [
                                                                                                                ],
                    ];
    }
}
