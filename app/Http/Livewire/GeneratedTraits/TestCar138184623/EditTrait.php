<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar138184623;

use App\Models\TestCar138184623;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar138184623 $testCar138184623;

                        
    public function mount(TestCar138184623 $testCar138184623)
    {
        $this->testCar138184623 = $testCar138184623;
                                }

    public function render()
    {
        return view('livewire.generated.test-car138184623.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar138184623->save();

        return redirect()->route('laragen.admin.test_car138184623s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar138184623.test' => [
                                                                                                                ],
                    ];
    }
}
