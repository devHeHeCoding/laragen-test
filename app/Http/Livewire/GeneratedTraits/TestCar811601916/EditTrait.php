<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar811601916;

use App\Models\TestCar811601916;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar811601916 $testCar811601916;

                        
    public function mount(TestCar811601916 $testCar811601916)
    {
        $this->testCar811601916 = $testCar811601916;
                                }

    public function render()
    {
        return view('livewire.generated.test-car811601916.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar811601916->save();

        return redirect()->route('laragen.admin.test_car811601916s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar811601916.test' => [
                                                                                                                ],
                    ];
    }
}
