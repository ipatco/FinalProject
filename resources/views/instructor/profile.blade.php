@extends('instructor')
@section('title', 'Profile')

@section('css')

@endsection

@section('page')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                        <h4 class="mb-0">$53k</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                        <h4 class="mb-0">2,300</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">New Clients</p>
                        <h4 class="mb-0">3,462</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Sales</p>
                        <h4 class="mb-0">$103,430</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 ">
            {{-- error --}}
            @if ($errors->any())
                <div class="alert alert-danger my-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Success --}}
            @if (session('success'))
                <div class="alert alert-success text-white my-4">
                    {{ session('success') }}
                </div>
            @endif
            {{-- failure --}}
            @if (session('failure'))
                <div class="alert alert-danger text-white my-4">
                    {{ session('failure') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Update Profile</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.profile.profile') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Prashant Rijal" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="98xxxxxxxx" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="email@address.com" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            {{-- Address => id, street, complement, city, state, zip_code, country --}}
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Street</label>
                                    <input type="text" class="form-control" placeholder="Street" name="street" value="{{ $user->address->street }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Address 2 (Optional)</label>
                                    <input type="text" class="form-control" placeholder="Address 2 (Optional)" name="complement" value="{{ $user->address->complement }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" name="city" value="{{ $user->address->city }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="State" name="state" value="{{ $user->address->state }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" placeholder="Zip Code" name="zip_code" value="{{ $user->address->zip_code }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" name="country" value="{{ $user->address->country }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h5 class="px-3 text-white">Change Password</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.profile.password') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="New Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
