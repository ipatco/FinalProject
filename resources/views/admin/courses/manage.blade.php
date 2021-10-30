@extends('admin')

@section('title', 'Courses')
@section('css')

@endsection

@section('page')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Courses</div>
                </div>
            </div>
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Courses</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Last Update</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($courses)
                                            @php $index = 1; @endphp
                                                @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>
                                                    <img class="media-object round-media" src="{{ asset($course->cover_img) }}" alt="Generic placeholder image" style="height: 75px;">
                                                </td>
                                                <td>{{ $course->title }}</td>
                                                <td>{{ date('M d, Y', strtotime( $course->updated_at)) }}</td>
                                                <td>{{ $course->price }}</td>
                                                <td>{{ $course->status == 1?'Active':'Draft' }}</td>
                                                <td>
                                                    <a class="success p-0" href="{{ route('admin.courses.edit', ['id'=>$course->id]) }}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title="" href="{{ route('admin.courses.delete', ['id'=>$course->id]) }}">
                                                        <i class="ft-x font-medium-3 mr-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('app-assets/vendors/js/jqBootstrapValidation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/form-validation.js') }}" type="text/javascript"></script>
    <script>
        $('.editThis').click(function(){
            let url = $(this).data('action');
            $.ajax({
                url: url,
                method: 'POST',
                success: function(response){
                    $('#editCategory').html(response);
                }});
            });
        })
    </script>
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="editCategory">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.categories.save') }}" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Category Name <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Category Slug <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="text" name="slug" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Category Parent</h5>
                                                    <div class="controls mb-1">
                                                        <select name="parent" class="custom-select">
                                                            <option value="" selected>Select Parent</option>
                                                            <option value="volvo">Volvo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Category Status <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <select name="status" class="custom-select" required data-validation-required-message="This field is required">
                                                            <option value="" selected>Select Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Category Icon <span class="required">*</span></h5>
                                                    <div class="controls mb-1">
                                                        <input type="file" name="icon" accept="image/*" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
@endsection
