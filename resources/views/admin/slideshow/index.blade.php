@extends('layouts.admin') @section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Slideshow</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="">
    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle " data-toggle="modal" data-target="#mymodal"><i class="ti-plus text-white"></i></button>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Slideshow </h4> @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table id="table_id" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Media</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slideshow as $number => $activ)
                            <tr>
                                <td>{{ $number+1 }}</td>
                                <td>{{ $activ->judul_slideshow }}</td>
                                <td>{{ $activ->media_slideshow }}</td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <form method="get" action="{{ route('slideshow.edit', $activ ) }}">
                                            <button type="submit" class="btn btn-secondary footable-edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <span class="fas fa-pencil-alt" aria-hidden="true"></span>
                                            </button>
                                        </form>
                                        <form id="formHapus{{$activ->id}}" action="{{ route('slideshow.destroy', $activ->id ) }}" method="POST">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <button data-id="{{$activ->id}}" onclick="deleteData(this)" type="button" class="btn btn-secondary footable-delete" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <span class="fas fa-trash-alt" aria-hidden="true"></span>
                                            </button>
                                        </form>
                                    </div>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        {{--
                        <p> {{$activ->media_slideshow }}</p> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sample modal content -->
<div id="mymodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-material m-t-40" method="POST" action="{{ route('slideshow.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input id="judul" class="form-control" type="text" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>

                        <input type="file" name="slideshow" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                    </div>
                    {{--
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                                                <span name="slideshow" class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="hidden">
                        <input type="file" name="slideshow"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div> --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->

@endsection @section('script') @parent @if(session()->has('delete'))
<script>
    $(document).ready(function() {
        deleteComplete();
    })

    function deleteComplete() {
        swal("Deleted!", "Data Sudah Terhapus.", "success")
    }
</script>
@endif
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

@endsection