@extends('moderator._layouts._app')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/> --}}
@endsection

@section('content')
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('site.all_projects')</h4>

                </div>
                <div class="card-block">

                    <form action="" class="col-md-12">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="search" id="search" autofocus
                                value="{{ request()->search }}" aria-describedby="helpId" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-2"><i class="fa fa-search"
                                style="position: relative" aria-hidden="true"></i>
                            @lang('site.search')</button>



                    </form>

                    @if ($projects->count() == 0)
                        <div class="table-responsive">
                            <h3 class="mr-3 mb-3" dir="rtl" style="text-align: right">@lang('site.no_data_found')</h3>
                        </div>
                    @else
                        <div class="project table-responsive">
                            <table id="table" class="table table-striped table-scrollable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">@lang('site.category')</th>
                                        <th scope="col">@lang('site.name')</th>
                                        {{-- <th scope="col">@lang('site.address')</th> --}}
                                        <th scope="col">الشقق</th>
                                    </tr>
                                </thead>
                                <tbody id="tablecontents">
                                    @foreach ($projects as $index => $project)
                                        <tr class="row1" dir="rtl" style=" text-align: right;"
                                            data-id="{{ $project->id }}">
                                            <td scope="row"> {{ $index + 1 }}</td>
                                            <td dir="rtl">{{ $project->category->name }}</td>
                                            <td dir="rtl">{{ $project->name }}</td>
                                            {{-- <td>{!! $project->address !!}</td> --}}
                                            <td><a href="{{ route('moderator.apartments.index', ['projectId' => $project->id]) }}"
                                                    type="button" class="btn btn-icon btn-primary mr-1"
                                                    style="  min-width: 100px;"> إدارة <i class="fa fa-edit"
                                                        style="position: relative;"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="text-center m-auto">{{ $projects->appends(request()->query())->links() }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
@endsection


@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

    <script type="text/javascript">
        $(function() {

            $("#table").DataTable({
                responsive: true,
                searching: false,
                paging: false,
                sorting: false,
                info: true,
            });
           

        });
    </script>
@endsection
