<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<x-app-layout>

<a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include ('admin.admincss')
  </head>
  <body>

  <div class="container-scroller">

   @include('admin.navbar')
   <div style="position:relative; top: 60px; right: -200px;" >
       <table bgcolor='grey' border='3px'>
           <tr>
               <th style="padding: 60px;">Name</th>
               <th style="padding: 60px;">Email</th>
               <th style="padding: 60px;">Action</th>
           </tr>

@foreach($data as $data)

           <tr align="center">
               <td>{{$data->name}}</td>
               <td>{{$data->email}}</td>

               @if ($data->usertype=="0")
               <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
               @else
               <td><a href=""></a></td>
               @endif
               
           </tr>

           @endforeach 

         
       </table>
   </div>

  </div>
   @include('admin.adminscript')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>


</body>
</html>