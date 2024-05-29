@extends('layouts.condition')
@section('condition')
<div>

   

    <ol>
        @foreach ($data as $conditions)
        <li>
            <h5>{{$conditions->title}}</h5>
            <ul>
                @php
                $data = $conditions->text;
                $items=(explode(".",$data));
                @endphp
                 
                 @foreach ($items as $item)
                 <li>{{$item}}</li>
                 @endforeach
                <!-- Add more placeholders as needed -->
            </ul> 
        </li>
        @endforeach
        
    </ol>
</div>

@endsection