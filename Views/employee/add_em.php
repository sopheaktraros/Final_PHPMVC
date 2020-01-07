<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Information Form</h2>
                </div>
                <form action="index.php?action=add_employee" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prov">Province</label><br>
                            <input type="text" name="pro" id="prov" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>