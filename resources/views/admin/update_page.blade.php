<!DOCTYPE html>
<html>

<head>
@include('admin.css');
</head>
<body>
    @include('admin.header');
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
         @include('admin.sidebar');
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                <h2>Update Product</h2>

                <div>
                    <form action="">

                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$data->title}}">
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea name="description" id="">{{$data->description}}</textarea>
                    </div>

                   <div>
                    <label>Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                   </div>

                   
                   <div>
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="{{$data->quantity}}">
                   </div>

                   <div>
                    <label>Category</label>
                    <select name="category" id="">
                        <option value="">{{$data->category}}</option>
                    </select>
                   </div>

                   <div>
                     <label for="">Current Image</label>
                     <img width="150"  src="/products/{{$data->image}}" alt="">
                   </div>

                   <div>
                    <input class="btn btn-success" type="submit" value="Update Product">
                   </div>



                    </form>
                </div>
                


            </div>
        </div>
    </div>
  
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>

</body>

</html>