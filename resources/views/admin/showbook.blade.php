<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      
        <div class="page-content">
        <div class="container mt-5">
          <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h2 class="h5">Books List</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                              <thead class="table-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Book Title</th>
                                  <th scope="col">Book Author</th>
                                  <th scope="col">Book Print Num</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Book Image</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php $datanum = 0; ?>
                                  @foreach ($data as $data)
                                  <tr>
                                      <td>{{ $data->id }}</td>
                                      <td>{{ $data->Book_Title }}</td>
                                      <td>{{ $data->Book_Author }}</td> 
                                      <td>{{ $data->Book_Print_Num }}</td> 
                                      <td>{{ $data->Book_Quantity }}</td> 
                                      <td>
                                        <img src="BookImages/{{ $data->Book_Img }}">
                                      </td>
                                      <td>
                                          <button class="btn btn-sm btn-info">Edit</button>
                                          <button class="btn btn-sm btn-danger">Delete</button>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      @include('admin.footer')
  </body>
</html>