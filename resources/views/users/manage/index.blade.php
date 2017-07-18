@extends('layouts.app')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Manage User {{ $user->name  }}
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="row">
            <div class="col-md-6">
                <h4> Role</h4>
                <div class="box box-success">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                 Role for {{ $user->name  }}
                            </div>
                            <div class="col-md-6" id="SelectionRole">

                                {!! Form::model($user, ['route' => ['users.manage.role.update', $user->id], 'method' => 'post']) !!}

                                <select name="user_role[]" id="userRole" class="form-control full-width" data-init-plugin="select2" multiple>
                                    @foreach($roles as $r)
                                        <option value="{{ $r->id }}" {{ (in_array($r->id, $role_selected)) ? 'selected' : '' }}>{{ $r->name }}</option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-success btn-block m-t-5">
                                    <span class="bold">Simpan</span>
                                </button>


                                {!! Form::close() !!}

                            </div>
                        </div>
                        <hr>
                        NB: Tolong perhatikan benar benar saat penamabahan Role
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h4> Password  </h4>
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Role </h4>
                            </div>
                            <div class="col-md-6">
                                hfsdfh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $('#userRole').select2();
    </script>
@endsection