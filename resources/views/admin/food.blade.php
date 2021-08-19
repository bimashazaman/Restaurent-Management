<!DOCTYPE html>
<html lang="en">
  @include('admin.admincss')
  <body>
    <div class="container-scroller">
   @include('admin.nav')

   <div>
    <div class="container">
        <form action="{{ url('/uploadFood') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row card-body w-full">


                    <div class="row card-body border-4 w-full">
                        <div class="flex-justify-center p-10">


                            <div class="form-group row">
                                <input id="title"
                                       type="text"
                                       name="title"
                                       placeholder="tite"
                                       autocomplete="title"
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
                                <input id="price"
                                       type="num"
                                       name="price"
                                       placeholder="price"
                                       autocomplete="price"
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
                    <th style="padding: 30px">Food title</th>
                    <th style="padding: 30px">Food description</th>
                    <th style="padding: 30px">Food price</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Update</th>
                </tr>

                @foreach ($data as $data )
                <tr align="center">
                    <td>{{ $data->title}}</td>
                    <td>{{ $data->description }}</td>
                    <td>${{ $data->price }}</td>
                    <td><img height="200" width="200" src="/foodimage/{{ $data->image }}" alt=""></td>
                    <td><a href="{{ url('/deletefood', $data->id) }}" >delete </a></td>
                    <td><a href="{{ url('/updateview', $data->id) }}" >Update </a></td>
                </tr>
                @endforeach
            </table>
        </div>

    


   @include('admin.footer')

  </body>
</html>
