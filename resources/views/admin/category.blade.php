<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            margin: auto;
        }

        .cat_label
        {
            font-size: 31px;
            font-weight: bold;
            padding: 30px;
            color: white;
        }
    </style>

  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar ')
      <!-- Sidebar Navigation end-->
    
       <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">

              <div>

                @if(session()->has('message'))

                  <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{ session()->get('message') }}

                  </div>

                @endif

              </div>

                <h1 class="cat_label">Add Category</h1>

                <form action="{{ url('add_category') }}" method="Post">
                    @csrf

                    <label for="">Category Name</label>
                    <input type="text" placeholder="Enter Category Name" name="category">
                    
                    <input class="btn btn-primary ml-2" type="submit" value="Add Category">

                </form>

            </div>

          </div>
        </div>
       </div>
    
    @include('admin.footer')
  </body>
</html>