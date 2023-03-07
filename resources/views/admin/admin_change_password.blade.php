@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('update.password') }}">
                                @csrf
                                <h4 class="card-title">Change Password</h4>

                                @if (count($errors))
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger alert-dismissable fade show">{{ $error }}</p>
                                    @endforeach
                                @endif

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input name="oldpassword" class="form-control" type="password" value=""
                                            id="oldpassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input name="newpassword" class="form-control" type="password" value=""
                                            id="newpassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input name="confirm_password" class="form-control" type="password" value=""
                                            id="confirm_password">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light"
                                    value="Change Password">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
