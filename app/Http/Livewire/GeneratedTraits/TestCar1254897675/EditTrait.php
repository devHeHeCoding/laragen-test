<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1254897675;

use App\Models\TestCar1254897675;
                use App\Models\TestCar2400139126;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2400139126s;
            
    public TestCar1254897675 $testCar1254897675;

    public function mount(TestCar1254897675 $testCar1254897675)
    {
        $this->testCar1254897675 = $testCar1254897675;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1254897675->save();

        return redirect()->route('laragen.admin.test_car1254897675s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1254897675.test' => [
                                                                                                                ],
                                                'testCar1254897675.prof._kaleigh_brekke_jr._id' => [
                                                                                                                ],
                    ];
    }
}
