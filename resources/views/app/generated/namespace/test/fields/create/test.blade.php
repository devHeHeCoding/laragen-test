<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car2114054145.fields.test') }}" for="7" :errors="$errors->get('testCar2114054145.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2114054145.fields.test')}}" name="testCar2114054145.test" id="7" wire:model.defer="testCar2114054145.test" />
</x-laragen::input.group>