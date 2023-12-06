@extends('layouts.app')
@section('content')
<div>
    <h1>Create New Equipment</h1>
    <form action="/equipments" method="POST">
        @csrf
        <input type="text" id="name" name="name" placeholder="Name...">
        <label for="category">Choose a category:</label>
        <select name="category" id="category">
            <option value="legs">Legs</option>
            <option value="chest">Chest</option>
            <option value="arms">Arms</option>
        </select>
        <input type="text" id="price" name="price" placeholder="Price...">
        <fieldset>
            <label>Additionals</label>
            <input type="checkbox" name="additionals[]" value="gloves">Gloves<br/>
            <input type="checkbox" name="additionals[]" value="shorts">Shorts<br/>
            <input type="checkbox" name="additionals[]" value="glasses">Glasses<br/>
        </fieldset>
        <input type="submit" value="Create">
    </form>
</div>
@endsection