<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar867844321;

use App\Models\TestCar867844321;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar867844321 $testCar867844321;

                        
    public function mount(TestCar867844321 $testCar867844321)
    {
        $this->testCar867844321 = $testCar867844321;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar867844321->save();

        return redirect()->route('laragen.admin.test_car867844321s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar867844321.test' => [
                                                                                                                ],
                    ];
    }
}
