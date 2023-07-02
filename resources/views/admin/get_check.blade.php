<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.head')
  </head>
  <body>
  @include('admin.sidebar')
    @include('admin.navbar')
   
          
   
  <div style="padding-top:100px;" >
    <table class="table table-success table-striped">

<tr >
 <th style="padding:10px;">Frist Name</th>
 <th style="padding:10px;">Last Name</th>
 <th style="padding:10px;">Country</th>
 <th style="padding:10px;">Address</th>
 <th style="padding:10px;">Apartment</th>
 <th style="padding:10px;">city</th>
 <th style="padding:10px;">state</th>
 <th style="padding:10px;">ZIP</th>
 <th style="padding:10px;">phone</th>
 <th style="padding:10px;">Product</th>
 <th style="padding:10px;">Price</th>
 <th style="padding:10px;">Payment</th>

 
</tr>

@foreach($data as $data)
<tr>
  <td style="padding:10px;">{{$data->fname}}</td>
  <td style="padding:10px;">{{$data->lname}}</td>
  <td style="padding:10px;">{{$data->country}}</td>
  <td style="padding:10px;">{{$data->saddress}}</td>
  <td style="padding:10px;">{{$data->apartment}}</td>
  <td style="padding:10px;">{{$data->city}}</td>
  <td style="padding:10px;">{{$data->state}}</td>
  <td style="padding:10px;">{{$data->code}}</td>
  <td style="padding:10px;">{{$data->phone}}</td>
  <td style="padding:10px;">{{$data->order_name}}</td>
  <td style="padding:10px;">{{$data->order_price}}</td>
  <td style="padding:10px;">{{$data->payment}}</td>
  
 </tr>

@endforeach


</table>




</div>















    
   @include('admin.script')
    
  </body>
</html>