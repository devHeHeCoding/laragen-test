<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car309679504.fields.test') }}" for="7" :errors="$errors->get('testCar309679504.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car309679504.fields.test')}}" name="testCar309679504.test" id="7" wire:model.defer="testCar309679504.test" />
</x-laragen::input.group>