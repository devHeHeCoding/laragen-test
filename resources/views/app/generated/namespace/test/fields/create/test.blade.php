<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car694414341.fields.test') }}" for="11" :errors="$errors->get('testCar694414341.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car694414341.fields.test')}}" name="testCar694414341.test" id="11" wire:model.defer="testCar694414341.test" />
</x-laragen::input.group>