@extends('moderator._layouts._app')

@section('content')
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('site.apartments')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="card-body " style="float: right;
                    position: relative;
                    z-index: 5000;">
                        <a href="{{ route('moderator.floors.show', $project->id) }}" type="button"
                            class="btn btn-icon btn-success" style="  min-width: 100px;">تعديل حالة الشقق<i
                                class="fa fa-edit" style="position: relative;"></i></a>


                    </div>
                    <form action="" class="col-md-12">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="search" id="search" autofocus
                                value="{{ request()->search }}" aria-describedby="helpId" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-2"><i class="fa fa-search"
                                style="position: relative" aria-hidden="true"></i>
                            @lang('site.search')</button>



                    </form>

                    @if ($apartments->count() == 0)
                        <div class="table-responsive">
                            <h3 class="mr-3 mb-3" dir="rtl" style="text-align: right">@lang('site.no_data_found')</h3>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped table-scrollable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">نوع الشقة</th>
                                        <th scope="col">الرمز</th>
                                        <th scope="col">العدد الكلي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apartments as $index => $apartment)
                                        <tr dir="rtl" style=" text-align: right;">
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td dir="rtl">
                                                @if ($apartment->appendix)
                                                    ملحق
                                                @else
                                                    {{ $apartment->type }}
                                                @endif
                                            </td>
                                            <td>{{ $apartment->code }}</td>
                                            <td>{{ $apartment->floors->count() }}</td>
                                            {{-- <td>

                                                <a href="{{ route('moderator.apartments.show', $apartment->id) }}"
                                                    type="button" class="btn btn-icon btn-primary"
                                                    style="  min-width: 100px;">إدارة<i class="fa fa-edit"
                                                        style="position: relative;"></i></a>

                                            </td> --}}
                                            
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="text-center m-auto">{{ $apartments->appends(request()->query())->links() }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
@endsection
