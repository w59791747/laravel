<h1>Hello, Laravel!456</h1> 
{{$test_5}}
@foreach ($test_1 as $val)
<p>{{$val}}</p>
@endforeach

 @if($test_5==111111)
<span style="color:red;">上架中</span>
     @else
 <span style="color: green;">已上架</span>
 @endif
