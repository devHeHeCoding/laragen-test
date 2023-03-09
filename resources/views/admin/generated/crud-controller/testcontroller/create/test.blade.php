<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car309064133.fields.test') }}" for="7" :errors="$errors->get('testCar309064133.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car309064133.fields.test')}}" name="testCar309064133.test" id="7" wire:model.defer="testCar309064133.test" />
</x-laragen::input.group>