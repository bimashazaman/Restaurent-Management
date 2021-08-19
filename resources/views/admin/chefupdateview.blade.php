<!DOCTYPE html>
<html lang="en">
  @include('admin.admincss')
  <body>
    <div class="container-scroller">
   @include('admin.nav')

   <div>
    <div class="container">
        <form action="{{ url('/updatechef', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row card-body w-full">
                <div class="row card-body border-4 w-full">
                    <div class="flex-justify-center p-10">


                        <div class="form-group row">
                            <input id="name"
                                   type="text"
                                   name="name"
                                   placeholder="name"
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

   @include('admin.footer')

  </body>
</html>
