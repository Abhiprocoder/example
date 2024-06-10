<form action="{{ url('/customer') }}" method="post">
    @csrf
    <div class="container">
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
