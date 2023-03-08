<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car18586312.fields.test') }}" for="7" :errors="$errors->get('testCar18586312.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car18586312.fields.test')}}" name="testCar18586312.test" id="7" wire:model.defer="testCar18586312.test" />
</x-laragen::input.group>