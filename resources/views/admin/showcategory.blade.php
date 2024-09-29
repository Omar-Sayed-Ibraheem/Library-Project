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
                      <h2 class="h5">Category List</h2>
                  </div>
                  <div class="card-body">
                      <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $datanum = 0; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ ++$datanum }}</td>
                                <td>{{ $item->Category_Title }}</td>
                                <td>{{ $item->Description }}</td> 
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