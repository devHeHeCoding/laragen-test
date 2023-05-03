<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car735945720.fields.test') }}" for="7" :errors="$errors->get('testCar735945720.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car735945720.fields.test')}}" name="testCar735945720.test" id="7" wire:model.defer="testCar735945720.test" />
</x-laragen::input.group>