<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car662858584.fields.test') }}" for="7" :errors="$errors->get('testCar662858584.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car662858584.fields.test')}}" name="testCar662858584.test" id="7" wire:model.defer="testCar662858584.test" />
</x-laragen::input.group>