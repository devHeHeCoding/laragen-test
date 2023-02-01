<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar800783990;

use App\Models\TestCar800783990;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar800783990 $testCar800783990;

                        
    public function mount(TestCar800783990 $testCar800783990)
    {
        $this->testCar800783990 = $testCar800783990;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar800783990->save();

        return redirect()->route('laragen.admin.test_car800783990s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar800783990.test' => [
                                                                                                                ],
                    ];
    }
}
