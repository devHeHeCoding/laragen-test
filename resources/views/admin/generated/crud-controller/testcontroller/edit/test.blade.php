<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car120031985.fields.test') }}        <input type="number"
               id="7"
               name="testCar120031985.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar120031985.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
