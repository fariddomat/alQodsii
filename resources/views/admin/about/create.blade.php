@extends('admin._layouts._app')

@section('scripts')
    <script type="text/javascript">
        var imageGalleryBrowseUrl = "{{ route('admin.imageGallery.browser') }}";
        var imageGalleryUploadUrl = "{{ route('admin.imageGallery.uploader') }}";
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('dashboard/js/about.js') }}"></script>
@endsection

@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                <h4>About</h4>
            </div>
            <div class="card-block">

                <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @include('admin._layouts._error')
                    <div class="form-group mb-3">
                        <label for="about_me" class="form-label">About Me</label>
                        <textarea class="form-control" id="about_me" name="about_me" rows="5" dir="rtl">{{ old('about_me') ?? isset($about) ? $about->about_me : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="who" class="form-label">Who are we?</label>
                        <textarea class="form-control" id="who" name="who" rows="5" dir="rtl">{{ old('who') ?? isset($about) ? $about->who_are_we : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="history" class="form-label">Our history</label>
                        <textarea class="form-control" id="history" name="history" rows="5" dir="rtl">{{ old('history') ?? isset($about) ? $about->history : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="massage" class="form-label">Our massage</label>
                        <textarea class="form-control" id="massage" name="massage" rows="5" dir="rtl">{{ old('massage') ?? isset($about) ? $about->massage : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="goals" class="form-label">Our goals</label>
                        <textarea class="form-control" id="goals" name="goals" rows="5" dir="rtl">{{ old('goals') ?? isset($about) ? $about->goals : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="vision" class="form-label">Our vision</label>
                        <textarea class="form-control" id="vision" name="vision" rows="5" dir="rtl">{{ old('vision') ?? isset($about) ? $about->vision : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="ambition" class="form-label">Our ambition</label>
                        <textarea class="form-control" id="ambition" name="ambition" rows="5" dir="rtl">{{ old('ambition') ?? isset($about) ? $about->ambition : '' }}</textarea>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <label for="quality_safty" class="form-label">quality and safty</label>
                        <textarea class="form-control" id="quality_safty" name="quality_safty" rows="5" dir="rtl">{{ old('quality_safty') ?? isset($about) ? $about->quality_safty : '' }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
