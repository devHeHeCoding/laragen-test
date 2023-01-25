<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar313451174;

use App\Models\TestCar313451174;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar313451174 $testCar313451174;

                        
    public function mount(TestCar313451174 $testCar313451174)
    {
        $this->testCar313451174 = $testCar313451174;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar313451174->save();

        return redirect()->route('laragen.admin.test_car313451174s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar313451174.test' => [
                                                                                                                ],
                    ];
    }
}
