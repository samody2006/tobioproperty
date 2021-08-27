@extends('backend.layouts.app')

@section('title', 'Gallery')

@push('styles')
<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/light-gallery/css/lightgallery.css')}}">
<style>
.img-wraps {
    position: relative;
    display: inline-block;
    
    font-size: 0;
}
.img-wraps .closes {
    position: absolute;
    top: 5px;
    right: 8px;
    z-index: 100;
    background-color: #FFF;
    padding: 4px 3px;
     
    color: #000;
    font-weight: bold;
    cursor: pointer;
    
    text-align: center;
    font-size: 22px;
    line-height: 10px;
    border-radius: 50%;
}
.img-wraps:hover .closes {
    opacity: 1;
}
</style>
@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>
                        GALLERY IMAGE
                        <a href="{{ route('admin.album') }}" class="right" title="Back"><i class="material-icons">undo</i></a>
                    </h2>
                </div>
                <div class="body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        @foreach($galleries as $gallery)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="img-wraps">
                            <span class="closes" title="Delete" onclick="deleteGallery({{$gallery->id}})">×</span>
                                <a href="{{Storage::url('gallery/'.$gallery->image)}}" data-sub-html="Demo Description" class="parent">
                                    <img class="img-responsive thumbnail" src="{{Storage::url('gallery/'.$gallery->image)}}">
                                </a>
                            </div>
                            <form action="{{route('admin.galleries.destroy',$gallery->id)}}" method="POST" id="del-gallery-{{$gallery->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>UPLOAD GALLERY IMAGE</h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.galleries.store')}}" method="POST" id="frmFileUpload" class="dropzone">
                        @csrf
                        <div class="dz-message">
                            <div class="drag-icon-cph">
                                <i class="material-icons">touch_app</i>
                            </div>
                            <h3>Drop files here or click to upload.</h3>
                            
                        </div>
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <input type="hidden" name="albumid" value="{{$album_id}}">
                    </form>
                    
                    <a href="{{route('admin.album.gallery',$album_id)}}" class="btn btn-indigo btn-lg m-t-15 waves-effect" style="width:100%">
                        <i class="material-icons">refresh</i>
                        <span>Refresh</span>
                    </a>

                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')
    <script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('backend/plugins/dropzone/dropzone.js') }}"></script>

    <script src="{{ asset('backend/plugins/light-gallery/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('backend/js/pages/medias/image-gallery.js') }}"></script>

    <script>
        function deleteGallery(id){
            
            swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del-gallery-'+id).submit();
                    swal(
                    'Deleted!',
                    'Gallery has been deleted.',
                    'success'
                    )
                }
            })
        }
    </script>
@endpush
