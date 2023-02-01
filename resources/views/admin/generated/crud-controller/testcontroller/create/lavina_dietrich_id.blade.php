<div class="form-group {{$errors->has('testCar1556346522.lavina_dietrich_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1556346522.fields.lavina_dietrich_id') }}        <input type="text"
               id="3"
               name="testCar1556346522.lavina_dietrich_id"
               class="form-control"
               placeholder="lavina_dietrich_id"
               wire:model.defer="testCar1556346522.lavina_dietrich_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1556346522.lavina_dietrich_id')}}        </span>
    </label>
</div>
