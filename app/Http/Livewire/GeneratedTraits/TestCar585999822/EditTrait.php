<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar585999822;

use App\Models\TestCar585999822;
                use App\Models\TestCar2544375555;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2544375555s;
            
    public TestCar585999822 $testCar585999822;

    public function mount(TestCar585999822 $testCar585999822)
    {
        $this->testCar585999822 = $testCar585999822;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar585999822->save();

        return redirect()->route('laragentestCar585999822s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar585999822.test' => [
                                                                                                                ],
                                                'testCar585999822.miss_alba_harvey_i_id' => [
                                                                                                                ],
                    ];
    }
}
