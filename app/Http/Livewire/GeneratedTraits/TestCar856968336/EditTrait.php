<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar856968336;

use App\Models\TestCar856968336;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar856968336 $testCar856968336;

                        
    public function mount(TestCar856968336 $testCar856968336)
    {
        $this->testCar856968336 = $testCar856968336;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar856968336->save();

        return redirect()->route('laragen.admin.test_car856968336s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar856968336.test' => [
                                                                                                                ],
                    ];
    }
}
