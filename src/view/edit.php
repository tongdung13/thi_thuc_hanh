


<div class="container-fixed">
    <div class="card">
        <div class="card-header">
            <h1>Customer</h1>
        </div>
        <div class="card-header">
            <a href="">Home |</a>
            <a href="index.php">List |</a>
            <a href="?page=add">Add |</a>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $customer['name'];?> " class="form-control">
                </div>
                <div class="form-group">
                    <label>category</label>
                    <input type="text" name="category" value="<?php echo $customer['category'];?> " class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" value="<?php echo $customer['price'];?> " class="form-control">
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" value="<?php echo $customer['amount'];?> " class="form-control">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" value="<?php echo $customer['date'];?> " >
                </div>
                <div class="from-group">
                    <label>Status</label>
                    <input type="text" name="status" value="<?php echo $customer['status'];?> " class="form-control">
                </div>
                <button name="sdm" type="submit" class="btn btn-primary">Add New</button>
            </form>
        </div>
    </div>
</div>
