@extends('layouts.app')
@section('content')
<div>
     <h1>Equipment: {{ $equipment->name }}</h1>
     <p>Equipment Rental Price: {{ $equipment->price }}</p>
     <p>Additionals:</p>
     <ul>
          @foreach($equipment->additionals as $additional)
               <li>{{ $additional }}</li>
          @endforeach
     </ul>
     <form action="{{ route('equipments.destroy', $equipment->id) }}" method="POST">
          @csrf
          @method("DELETE")
          <button>Remove Equipment</button>
     </form>
</div>
<a href="/equipments">Go back to all equipments</a>
@endsection