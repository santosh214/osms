<div class="text-danger">
    <?php 
        include('dbConnection.php');
        if(isset($_REQUEST['uSignUp'])){
            // CHECKING FORR EMPTY FIELDS...
            if(($_REQUEST['uName'] == "") ||($_REQUEST['uEmail'] == "")||($_REQUEST['uPassword'] == "")){
            $regmsg ='<div class="alert alert-warning mt-2" role="alert">All fields are required </div>';
                
        }

        else{
            //EMAIL ALREADY REGISTERED
            $sql="SELECT u_EMAIL FROM  createuseraccount_db WHERE u_EMAIL='".$_REQUEST['uEmail']."' ";
            $result  =$connection->query($sql);
            if($result->num_rows==1){
        $regmsg ='<div class="alert alert-danger mt-2" role="alert">Email Id Alredy Registered  . </div>';
            }else{
                //ASSIIGNING USERS VALUE TO VARIABLES....
       $uName= $_REQUEST['uName'];
        $uEmail= $_REQUEST['uEmail'];
        $uPassword= $_REQUEST['uPassword'];
        $sql="INSERT INTO createuseraccount_db(u_NAME, u_EMAIL, u_PASSWORD) VALUES('$uName','$uEmail','$uPassword')";
       if( $connection->query($sql)==true){
        $regmsg ='<div class="alert alert-success mt-2" role="alert">Account Successfullly Created. </div>';
       }
       else{
        $regmsg ='<div class="alert alert-danger mt-2" role="alert">Unable to create Account  . </div>';
       } 
       }
        } 
}
?>
</div>


<div class="container pt-5  " id="Registration">
    <h2 class="text-center">Create An Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-3 mb-3 bg-light rounded" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="uName" id="">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="uEmail" id="">
                    <small class="form-text">We'll never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="password" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="uPassword" id="">
                </div>
                <button type="submit" class="btn btn-block mt-5 shadow-sm font-weight-bold btn-danger"name="uSignUp">Sign Up</button>
                <em style="font-size: 10px;">Note - By clicking Sign Up, You agree to our Terms, Data Policy and Cookie Policy</em>
            <?php  if(isset($regmsg)){ echo  $regmsg;} ?>
            </form>
        </div>
    </div>
</div>
