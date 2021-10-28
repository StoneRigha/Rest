<x-app-layout>

<a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
  </head>
  <body>

  <div class="container-scroller">
  @include('admin.navbar')
  
<form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
@csrf

    <div>
        <label>Name</label>
        <input style="color:black;" type="text" name="name" required="" placeholder="Enter name">

    </div>

    <div>
        <label>Speciality</label>
        <input style="color:black;" type="text" name="speciality" required="" placeholder="Enter speciality">

    </div>

    <div>
        
        <input type="file" name="image" required="">

    </div>

    <div>
       
        <input style="color:black;" type="submit" value="Save">

    </div>

</form>


<div style="position:relative; top:70px; right: -150;">

    <table bgcolor = "grey" >
        <tr>

        <th style="padding: 50px;">Name</th>
        <th style="padding: 50px;">Speciality</th>
        <th style="padding: 50px;">Image</th>
        <th style="padding: 50px;">Action</th>
        <th style="padding: 50px;">Action</th>

        </tr>

        <tr align="center">
@foreach($data as $item)
        <td>{{$item->name}}</td>
        <td>{{$item->speciality}}</td>
        <td><img src="/chefimage/{{$item->image}}"  style="height: 100px; width:100px" alt=""></td>
        <td><a href="{{url('/updatechef', $item->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef', $item->id)}}">Delete</a></td>
        
        

        </tr>
        
        @endforeach
        
    </table>
        
    </div>


  </div>
  
   @include('admin.admincss')
   @include('admin.adminscript')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>



 





