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
    <table style="width:200 hight:200" bgcolor="">

<tr >
 <th style="padding:10px;"> Name</th>
 <th style="padding:10px;" >Speciality</th>
 <th style="padding:10px;">Image</th>
 <th style="padding:10px;">Update</th>
 <th style="padding:10px;">Delete</th>
</tr>

@foreach($data as $data)
<tr>
  <td style="padding:10px;">{{$data->name}}</td>
  <td style="padding:10px;">{{$data->special}}</td>
  <td style="padding:10px;"><img style="width:100px; hight:100px"; src="chefimage/{{$data->image}}"> </td>

  <td style="padding:10px;"><a class="btn btn-info" href="{{url('updated-chef',$data->id)}}">Update</a></td>
  <td style="padding:10px;"><a class="btn btn-danger" href="{{url('deleted-chef',$data->id)}}"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
  
 </tr>
@endforeach







</table>


</div>

</div>
   
    
   @include('admin.script')
    
  </body>
</html>