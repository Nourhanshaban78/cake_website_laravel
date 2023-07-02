<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.head')
  </head>
  <body>
  @include('admin.sidebar')
    @include('admin.navbar')
   
          
    <div class="container-fluid page-body-wrapper">
  <div style="padding-top:100px;" align="center">
    <table class="table table-success table-striped">

<tr >
 <th > Name</th>
 <th >Email</th>
 <th >Messages</th>
 
 
</tr>

@foreach($data as $data)
<tr>
  <td>{{$data->name}}</td>
  <td>{{$data->email}}</td>
  <td>{{$data->message}}</td>
 
  
 </tr>

@endforeach


</table>




</div>


<div>












    
   @include('admin.script')
    
  </body>
</html>