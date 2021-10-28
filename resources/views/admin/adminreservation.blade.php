<x-app-layout>

<a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
  </head>
  <body>

<div>
  
</div>
  <div style="position:relative; top:70px; right: -150;">
      <table bgcolor = "grey" border="1px">
          <tr>
              <th style="padding: 30px;">Name</th>
              <th style="padding: 30px;">Email</th>
              <th style="padding: 30px;">Phone</th>
              <th style="padding: 30px;">Guest</th>
              <th style="padding: 30px;">Date</th>         
              <th style="padding: 30px;">Time</th>
              <th style="padding: 30px;">Message</th>
              
          </tr>

           @foreach($data as $item)
          <tr align ="center">
              <td>{{$item->name}}<td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->guest}}</td>
              <td>{{$item->date}}</td>
              <td>{{$item->time}}</td>
              <td>{{$item->message}}</td>
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



 





