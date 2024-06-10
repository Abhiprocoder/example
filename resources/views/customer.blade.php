
<main>
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-lableledby="registrationModallable"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModallable"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/customer') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <x-input type="text" name="name" label ="Name"/>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="email" name="email" label ="Email" />
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <lable for="gender">Address</lable>
                                            <label for=""></label>
                                            <textarea type="text" name="address" class="w-100"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <lable for="gender">Gender</lable>
                                            <select class="form-control" name="gender" required>
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="text" name="country" label ="Country"/>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="text" name="state" label ="State"/>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="date" name="dob" label ="Date Of Birth"/>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="password" name="password" label ="Password" value="" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="password" name="confirmPassword" label ="Confirm Password" value="" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <!-- place footer here -->
</footer>

<script>
    $(document).ready(function() {
        $('#registrationModal').modal('show');
    });
</script>
