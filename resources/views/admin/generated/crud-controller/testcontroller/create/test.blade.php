<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car150542530.fields.test') }}" for="7" :errors="$errors->get('testCar150542530.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car150542530.fields.test')}}" name="testCar150542530.test" id="7" wire:model.defer="testCar150542530.test" />
</x-laragen::input.group>