<x-layout>

    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content-body">

        <div class="container-fluid">
            <nav>
                <ol class="breadcrumb">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif
                </ol>
            </nav>

            <h3 class="page-title">Photo Album</h3>

            <!-- Form Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            @if ($value)
                                <form method="post" action="{{ url('photoalbum') . '/' . $value->id ?? '' }}" enctype="multipart/form-data">
                            @else
                                <form method="post" action="{{ url('photoalbum') }}" enctype="multipart/form-data">
                            @endif
                                @csrf
                                <div class="mb-3">
                                    <label class="text-label form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Write Title for Album" value="{{ $value->title ?? '' }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="example-email" class="form-label">Images</label>
                                    <input type="file" id="example-email" name="image[]" multiple class="form-control input-group" accept="image/*" >
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                @if($value)
                                   @php 
                                     $imgg= json_decode($value->image);
                                   @endphp
                                     @foreach($imgg as $img)
                                    <img src="{{asset('Admin/Images').'/'.$img ?? ''}}" width="80px">
                                    @endforeach
                                @endif

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Section -->

            <!-- Table Section -->
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Photo Album Table</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr class="text-dark">
                                        <th>Sr. No.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $serial = 1 @endphp <!-- Initialize a counter -->

                                    @foreach($data as $key => $item)
                                        <tr>
                                            <td>{{ $serial }}</td>
                                            <td>{{ ucwords($item->title) ?? '' }}</td>
                                             @php
                                               $imagess= json_decode($item->image);
                                             @endphp
                                            <td class="text-dark">
                                                @foreach($imagess as $img)
                                                <img src="{{asset('Admin/Images').'/'.$img ?? ''}}" width="90px">
                                                @endforeach
                                                </td>
                                            <td>
                                                <a href="{{url('photoalbumdelete').'/'.$item->id ?? ''}}">
                                                    <button
                                                    type="button" class="btn btn-danger">
                                                    <i class="ti-trash" style="font-size: 18px;"></i>
                                                </button>
                                                </a>
                                                <a href="{{url('photoalbum').'/'.$item->id ?? ''}}">
                                                    <button
                                                    type="button" class="btn btn-primary " >
                                                    <i class="ti-pencil" style="font-size: 18px;"></i>
                                                </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @php $serial++ @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- End Table Section -->

        </div>
    </div>

</x-layout>
