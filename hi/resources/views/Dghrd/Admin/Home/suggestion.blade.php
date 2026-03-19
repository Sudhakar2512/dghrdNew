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


            <!-- Form Section -->
           
            <!-- Table Section -->
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Suggestions</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr class="text-dark">
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Suggestions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $serial = 1 @endphp <!-- Initialize a counter -->

                                    @foreach($suggestions as $key => $item)
                                        <tr>
                                            <td>{{ $serial }}</td>
                                            <td class="text-dark">{{ $item->name ?? '' }}</td>
                                            <td>
                                                {{ $item->mobile ?? '' }}
                                            </td>
                                            <td>{{ $item->email ?? '' }} </td>
                                            <td>{{ $item->subject ?? '' }}</td>
                                            <td>{{ $item->suggestions ?? '' }}</td>
                                            <td> <a href="{{url('delete_suggestion').'/'.$item->id ?? ''}}">
                                                <button
                                                type="button" class="btn btn-danger">
                                                <i class="ti-trash" style="font-size: 18px;"></i>
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
