<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car357195745.fields.test') }}" for="7" :errors="$errors->get('testCar357195745.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar357195745.test" id="7" wire:model.defer="testCar357195745.test" />
</x-laragen::input.group>