<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1980886838;

use App\Models\TestCar1980886838;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1980886838 $testCar1980886838;

                        
    public function mount(TestCar1980886838 $testCar1980886838)
    {
        $this->testCar1980886838 = $testCar1980886838;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1980886838->save();

        return redirect()->route('laragen.admin.test_car1980886838s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1980886838.test' => [
                                                                                                                ],
                    ];
    }
}
