<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar28334949;

use App\Models\TestCar28334949;
                use App\Models\TestCar2606558876;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2606558876s;
            
    public TestCar28334949 $testCar28334949;

    public function mount(TestCar28334949 $testCar28334949)
    {
        $this->testCar28334949 = $testCar28334949;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar28334949->save();

        return redirect()->route('laragentestCar28334949s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar28334949.test' => [
                                                                                                                ],
                                                'testCar28334949.geraldine_denesik_id' => [
                                                                                                                ],
                    ];
    }
}
