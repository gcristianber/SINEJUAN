<?php 
session_start();
$title = "Accounts"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; ?>


<div class="view_movies">
<?php include '../../includes/sidebar.inc.php';?>
    <div class="view_movies_content">
        <div class="view_movies_content-header">
            <h1>Accounts</h1>
        </div>
        <div class="view_movies_content-body">
            <div class="view_movies_content-list">
                <table>
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>UID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $sql = 'SELECT * FROM users WHERE role_id = 1;';

                            $stmt = $conn->query($sql);
                            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($users) {
                                foreach ($users as $user) {   
                                    $i=0;         
                            ?>
                        <tr>
                            <td>
                                <img src="../../assets/avatars/<?php echo $user['avatar_img_path'];?>" class="avatar"> 
                            </td>
                            <td><?php echo $user['user_uid'];   ?></td>
                            <td><?php echo $user['user_fname']." ".$user['user_lname']; ?></td>
                            <td><?php echo $user['user_email']?></td>
                            <td>
                                <button class="btn btn-view">
                                <span class="material-symbols-outlined">visibility</span>
                                </button>

                                <button class="btn btn-block" title="Block User">
                                <span class="material-symbols-outlined">block</span>
                                </button>
                            </td>
                        </tr>
                        <?php
                                }      
                            }else{
                                echo "No Data found!";
                            }
                        ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include '../../includes/footer.inc.php'; ?>