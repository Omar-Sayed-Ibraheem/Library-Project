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
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white text-center">
                            <h1 class="h4">Update Category</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('category_update', $data->id)}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">New Category Name</label>
                                        <input type="text" class="form-control" id="categoryName" name="category" value="{{$data->Category_Title}}" required>
                                    </div>
                                    <div class="d-grid">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                        <!-- <button type="submit" class="btn btn-primary">Update</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      @include('admin.footer')
  </body>
</html>