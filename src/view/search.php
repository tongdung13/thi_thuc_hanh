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
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>category</th>
                    <th>price</th>
                    <th>amount</th>
                    <th>date</th>
                    <th>status</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody >
                <?php foreach ($customers as $key => $customer): ?>
                    <tr>
                        <td><?php echo ++$key  ?></td>
                        <td><?php echo $customer['name'] ?></td>
                        <td><?php echo $customer['category'] ?></td>
                        <td><?php echo $customer['price'] ?></td>
                        <td><?php echo $customer['amount'] ?></td>
                        <td><?php echo $customer['date'] ?></td>
                        <td><?php echo $customer['status'] ?></td>
                        <td>
                            <a href="?page=edit&id=<?php echo $customer['id']  ?>" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <a href="?page=delete&id=<?php echo $customer['id'] ?>" onclick="return confirm('ban co muon xoa')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

