<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car629429290.fields.test') }}" for="7" :errors="$errors->get('testCar629429290.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car629429290.fields.test')}}" name="testCar629429290.test" id="7" wire:model.defer="testCar629429290.test" />
</x-laragen::input.group>