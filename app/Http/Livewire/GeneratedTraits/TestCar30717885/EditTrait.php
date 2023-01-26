<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar30717885;

use App\Models\TestCar30717885;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar30717885 $testCar30717885;

                        
    public function mount(TestCar30717885 $testCar30717885)
    {
        $this->testCar30717885 = $testCar30717885;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar30717885->save();

        return redirect()->route('laragen.admin.test_car30717885s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar30717885.test' => [
                                                                                                                ],
                    ];
    }
}
