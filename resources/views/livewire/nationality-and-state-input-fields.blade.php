<div class="d-flex justify-content-between">
<x-adminlte-select name="nationality" label="Nationality" fgroup-class="flex-fill mr-3"  wire:model="nationality" enable-old-support>
    @foreach ($nationalities as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</x-adminlte-select>
<x-adminlte-select2 name="state" label="State" fgroup-class="flex-fill" enable-old-support wire:init="loadInitialStates">
    @if (isset($states))
        @foreach ($states as $item)
            <option value="{{$item}}">{{$item}}</option>
        @endforeach
    @else 
        <option value="" disabled>Select a country first</option>
    @endif
</x-adminlte-select2>
</div>