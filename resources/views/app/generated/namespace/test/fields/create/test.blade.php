<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car958059729.fields.test') }}" for="11" :errors="$errors->get('testCar958059729.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car958059729.fields.test')}}" name="testCar958059729.test" id="11" wire:model.defer="testCar958059729.test" />
</x-laragen::input.group>