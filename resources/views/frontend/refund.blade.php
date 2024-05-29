     @extends('layouts.refund')

     @section('refund_policy')  
         
     <div>
        <h5>timeline</h5>
        <div>
          @php
            $timeline=$data->timeline;
            $timeline_data= explode('.',$timeline);
          @endphp
         <ol>
          @foreach ($timeline_data as $list_timeline)
          <li>{{$list_timeline}}</li>
          @endforeach
         </ol>
        </div>
      
        <h5>condition</h5>
        <div>
          @php
          $condition=$data->condition;
          $condition_data= explode('.',$condition);
        @endphp
        <ol>
        @foreach ($condition_data as $list_condition)
        <li>{{$list_condition}}</li>
        @endforeach
        </ol>
        </div>
      
        <h5>policies</h5>


        <div>
          @php
          $policies=$data->policies;
          $policies_data= explode('.',$policies);
        @endphp
        <ol>
        @foreach ($policies_data as $list_policies)
        <li>{{$list_policies}}</li>
        @endforeach
        </ol>
        </div>
      
        <h5>support</h5>
        <div>
          @php
            $support = $data->support;
            $array = explode(",", $support);
           $link = $array[0];
           $text = $array[1];
           $support_data = explode(",", $text);
          @endphp

          <a href="{{$link}}">Click hear</a>

          <ol>
            @foreach ($support_data as $list_support)
            <li>{{$list_support}}</li>
            @endforeach
            </ol>
        </div>
        
        </div>


    @endsection