<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar330993769;

use App\Models\TestCar330993769;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar330993769 $testCar330993769;

    
    public function mount(TestCar330993769 $testCar330993769)
    {
        $this->testCar330993769 = $testCar330993769;
            }

    public function render()
    {
        return view('livewire.generated.test-car330993769.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar330993769->save();

        return redirect()->route('laragen.admin.test_car330993769s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar330993769.test' => [
                                                                                ],
                    ];
    }
}
