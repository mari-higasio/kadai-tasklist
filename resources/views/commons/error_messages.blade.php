@if(count($errors)>0)
   <ul>
       @foreach( $errors->all() as $error)
         <li>{{ $eeror }}</li>
       @endforeach
   </ul>
@endif