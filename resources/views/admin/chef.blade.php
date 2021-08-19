<!DOCTYPE html>
<html lang="en">
  @include('admin.admincss')
  <body>
    <div class="container-scroller">
   @include('admin.nav')

   <div>
    <div class="container">
        <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row card-body w-full">


                    <div class="row card-body border-4 w-full">
                        <div class="flex-justify-center p-10">


                            <div class="form-group row">
                                <input id="name"
                                       type="text"
                                       name="name"
                                       placeholder=name"
                                       autocomplete="name"
                                       autofocus>
                            </div>

                            <div class="form-group row">
                                <input id="description"
                                       type="text"
                                       name="description"
                                       placeholder="description"
                                       autocomplete="description"
                                       autofocus>
                            </div>



                            <div class="form-group row">
                                <input id="image"
                                       type="file"
                                       name="image"
                                       placeholder="image"
                                       autocomplete="image"
                                       autofocus>
                            </div>

                            <div class="col-md-12">
                                <button

                                type="submit"
                                class="btn btn-primary"
                                id="submit">
                                Submit

                                </button>
                            </div>
                    </div>
            </div>
        </form>
    </div>

</div>


<div style="position: relative; top:60px; right: -150px">
    <table  border="3px">
        <tr>
            <th style="padding: 30px">name</th>
            <th style="padding: 30px">description</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Update</th>
        </tr>

        @foreach ($data as $data )
        <tr align="center">
            <td>{{ $data->name}}</td>
            <td>{{ $data->description }}</td>
            <td><img height="200" width="200" src="/chefimage/{{ $data->image }}" alt=""></td>
            <td><a href="{{ url('/deletechef', $data->id) }}" >delete </a></td>
            <td><a href="{{ url('/updatechefview', $data->id) }}" >Update </a></td>
        </tr>
        @endforeach
    </table>
</div>

   @include('admin.footer')

  </body>
</html>
