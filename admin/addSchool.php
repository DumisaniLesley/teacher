<?php include('../includes/head.php'); ?>
  

<div class="container">
    <h2 class="tab-title text-center mb-4" style="margin-bottom: 40px; color: black; margin-top: 70px;">Add School</h2>
    <form class="form-group" method="post" action="../functions/func2.php">
        <div class="row">
            <div class="col-md-4"><label>School number:</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="school_number" required></div><br><br>
            <div class="col-md-4"><label>School Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="name"
                    required></div><br><br>
            <div class="col-md-4"><label>School Email ID:</label></div>
            <div class="col-md-8"><input type="email" class="form-control" name="email" required>
            </div><br><br>
            <div class="col-md-4"><label>Status:</label></div>
            <div class="col-md-8">
                <select name="status" class="form-control" id="status" required="required">
                    <option value="" name="state" disabled selected>Select Vacancy
                    </option>
                    <option value="vacant" name="state">Vacant</option>
                    <option value="not vacant" name="state">Not Vacant</option>
                </select>
                <br>
                <input type="submit" name="add_school" value="Add School" class="btn btn-block btn-primary">
            </div><br><br>
        </div>
    </form>
</div>