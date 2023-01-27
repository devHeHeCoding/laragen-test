<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar861757788;

use App\Models\TestCar861757788;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar861757788 $testCar861757788;

                        
    public function mount(TestCar861757788 $testCar861757788)
    {
        $this->testCar861757788 = $testCar861757788;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar861757788->save();

        return redirect()->route('laragen.admin.test_car861757788s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar861757788.test' => [
                                                                                                                ],
                    ];
    }
}
