

  @include('admin.admincss')
  <body>
    <div class="container-scroller">
   @include('admin.nav')



       <div style="position: relative; top:60px; right: -150px">
       <table border="3px">
           <tr>
               <th style="padding: 30px"">Name</th>
               <th style="padding: 30px"">Email</th>
               <th style="padding: 30px"">Action</th>
           </tr>
           @foreach ($data as $data)


           <tr align="center">
               <td>{{ $data-> name}}</td>
               <td>{{ $data->email }}</td>

               @if ($data->userType=="0")
               <td><a href="{{ url('/deleteUser', $data->id) }}">delete</a></td>
               @else
               <td>Admin</td>
               @endif

           </tr>

           @endforeach

       </table>
    </div>


   @include('admin.footer')


