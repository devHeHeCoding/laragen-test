<div class="form-group {{$errors->has('testCar527784445.luigi_kuphal_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car527784445.fields.luigi_kuphal_id') }}        <input type="text"
               id="3"
               name="testCar527784445.luigi_kuphal_id"
               class="form-control"
               placeholder="luigi_kuphal_id"
               wire:model.defer="testCar527784445.luigi_kuphal_id"
        >
        <span class="error-message">
            {{$errors->first('testCar527784445.luigi_kuphal_id')}}        </span>
    </label>
</div>
