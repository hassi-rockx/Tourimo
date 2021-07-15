<?php include 'include/head.php' ?>
<?php include 'include/navbar.php' ?>

<div class="job-head"></div>

<div class="col-md-6 offset-md-3 mt-5">

    <h1 class="text-center" style="margin-bottom: 24px;">Thank You for Your Interest in Tourimo</h1>
    <p>Please fill the following form for us to Inspect</p>
    <form method="POST" id="guide">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" id="hname" placeholder="Enter your full name" required data-error="Please enter your name">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" id="hemail" required data-error="Please enter your name"  placeholder="Enter your email address">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required data-error="Please enter your name" id="haddress" placeholder="House No-1 Street No-3">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" name="city" required data-error="Please enter your name" class="form-control" id="hcity" placeholder="Islamabad">
            </div>
            <div class="form-group col-md-2">
                <label>Zip</label>
                <input type="text" name="zip" required data-error="Please enter your name" class="form-control" id="hzip" placeholder="34000">
            </div>
        </div>
        <div class="form-group">
            <label class="col-2 col-form-label">Mobile</label>
            <div class="col-10">
                <input class="form-control" required data-error="Please enter your name" name="phone" type="tel" id="hphone" placeholder="+92-300-123456">
            </div>
        </div>
        <div class="form-group">
            <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
            <div class="col-10">
                <input class="form-control" required data-error="Please enter your name" name="starting_date" type="date" placeholder="2020-02-01" id="hdate">
            </div>
        </div>
        <div class="form-group mt-3">
            <label class="mr-4">Upload your CV:</label>
            <input type="file" name="file">
        </div>
        <button type="submit" class="btn btn-dark" style="float: right;" onclick="hire()">Submit</button>
    </form>
</div>


<div class="gap"></div>
<?php include 'include/footer.php' ?>