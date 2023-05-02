<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car818294327.fields.test') }}" for="7" :errors="$errors->get('testCar818294327.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car818294327.fields.test')}}" name="testCar818294327.test" id="7" wire:model.defer="testCar818294327.test" />
</x-laragen::input.group>