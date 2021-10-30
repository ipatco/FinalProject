@extends('admin')

@section('title', 'Categories')
@section('css')

@endsection

@section('page')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">Categories</div>
                </div>
            </div>
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Category</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
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
                                                            @if ($categories)
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            @endif
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Categories</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th></th>
                                                <th>Category Name</th>
                                                <th>Slug</th>
                                                <th>Parent</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($categories)
                                            @php $index = 1; @endphp
                                                @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>
                                                    <img class="media-object round-media" src="{{ asset($category->icon) }}" alt="Generic placeholder image" style="height: 75px;">
                                                </td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->parent }}</td>
                                                <td>{{ $category->status == 1?'Active':'Draft' }}</td>
                                                <td>
                                                    <a class="success p-0 editThis" data-original-title="" title="" data-toggle="modal" data-target="#myModal" data-name="{{ $category->name }}" data-slug="{{ $category->slug }}" data-parent="{{ $category->parent }}" data-status="{{ $category->status }}" data-action="{{ route('admin.categories.edit', ['id'=>$category->id]) }}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title="" href="{{ route('admin.categories.delete', ['id'=>$category->id]) }}">
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
            let name = $(this).data('name');
            let slug = $(this).data('slug');
            let parent = $(this).data('parent');
            let status = $(this).data('status');
            $('#editName').val(name);
            $('#editSlug').val(slug);
            $('#editParent').val(parent);
            $('#editStatus').val(status);
            $('#editForm').attr('action', url);
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
        <form class="form-horizontal" method="post" id="editForm" enctype="multipart/form-data" action="{{ route('admin.categories.save') }}" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <h5>Category Name <span class="required">*</span></h5>
                        <div class="controls mb-1">
                            <input type="text" name="name" class="form-control" id="editName" required data-validation-required-message="This field is required">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Category Slug <span class="required">*</span></h5>
                        <div class="controls mb-1">
                            <input type="text" name="slug" class="form-control" id="editSlug" required data-validation-required-message="This field is required">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Category Parent</h5>
                        <div class="controls mb-1">
                            <select name="parent" class="custom-select" id="editParent">
                                <option value="" selected>Select Parent</option>
                                @if ($categories)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Category Status <span class="required">*</span></h5>
                        <div class="controls mb-1">
                            <select name="status" class="custom-select" id="editStatus" required data-validation-required-message="This field is required">
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
