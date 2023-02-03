<x-laragen::input.group label="{{ __trans('cruds.test-car276494793.fields.test') }}" for="7" :errors="$errors->get('testCar276494793.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar276494793.test" id="7" wire:model.defer="testCar276494793.test" />
</x-laragen::input.group>