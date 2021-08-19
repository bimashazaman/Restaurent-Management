<!DOCTYPE html>
<html lang="en">
  @include('admin.admincss')
  <body>
    <div class="container-scroller">
   @include('admin.nav')

   <div style="position: relative; top:60px; right: -150px">
    <table  border="3px">
        <tr>
            <th style="padding: 30px">Name</th>
            <th style="padding: 30px">email</th>
            <th style="padding: 30px">phone</th>
            <th style="padding: 30px">guest</th>
            <th style="padding: 30px">date</th>
            <th style="padding: 30px">time</th>
            <th style="padding: 30px">message</th>
        </tr>

        @foreach ($data as $data )
        <tr align="center">
            <td> {{ $data->name}} </td>
            <td> {{ $data->email }} </td>
            <td> {{ $data->phone }} </td>
            <td> {{ $data->guest }} </td>
            <td> {{ $data->date }}  </td>
            <td> {{ $data->time }}  </td>
            <td> {{ $data->message }} </td>

        </tr>
        @endforeach
    </table>
</div>


   @include('admin.footer')

  </body>
</html>
