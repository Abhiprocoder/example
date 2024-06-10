<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/customer/view')}}">Customer</a>
            </li>
        </ul>
    </div>
</nav>
<form action="{{ url('/customer') }}" method="post" class="bg-info">
    @csrf
    <div class="container m-5">
        <div class="row">
            <div class="col-6">
                <x-input type="text" name="name" label="Name" value="" />
            </div>
            <div class="col-6">
                <x-input type="email" name="email" label="Email" value="" />
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control w-100"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <x-input type="text" name="country" label="Country" value="" />
            </div>
            <div class="col-6">
                <x-input type="text" name="state" label="State" value="" />
            </div>
            <div class="col-6">
                <x-input type="date" name="dob" label="Date Of Birth" value="" />
            </div>
            <div class="col-6">
                <x-input type="password" name="password" label="Password" value="" />
            </div>
            <div class="col-6">
                <x-input type="password" name="confirmPassword" label="Confirm Password" value="" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</form>

<!-- Ensure x-bootstrap Blade component is included properly -->
<x-bootstrap />

<script>
    $(document).ready(function() {
        $('#registrationModal').modal('show');
    });
</script>

<!-- Ensure jQuery is properly included -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
