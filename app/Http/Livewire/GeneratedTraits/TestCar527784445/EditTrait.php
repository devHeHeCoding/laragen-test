<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar527784445;

use App\Models\TestCar527784445;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar527784445 $testCar527784445;

                        
    public function mount(TestCar527784445 $testCar527784445)
    {
        $this->testCar527784445 = $testCar527784445;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar527784445->save();

        return redirect()->route('laragen.admin.test_car527784445s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar527784445.test' => [
                                                                                                                ],
                    ];
    }
}
