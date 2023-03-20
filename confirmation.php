<?php
session_start();
    if(isset($_SESSION['success'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" style="background-color:#d4edda; font-size:18px; font-weight:bold color:#d4edda; padding:7px;" role="alert">
           <?php echo $_SESSION['success'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['success']);
    }else if(isset($_SESSION['fail'])){
    ?>
    <div class="alert alert-success alert-dismissible fade show" style="background-color:#f8d7da; font-size:18px; font-weight:bold color:#f8d7da; padding:7px;" role="alert">
           <?php echo $_SESSION['fail'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['fail']);}?>