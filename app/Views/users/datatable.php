
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>password</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $username; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $first_name; ?></td>
                <td><?php echo $last_name; ?></td>
                <td><?php echo $email; ?></td>
            </tr>
            </tbody>
    </table>

    <form action="<?php echo base_url('users/logout');?>" method="POST" enctype="multipart/form-data">
    <button type="submit" class="btn btn-primary">Logout</button>
    </form>

    