<?php 
    session_start();
    if($_SESSION['code'] == $_GET['v']){
?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-info" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center" style="height: 490px;">
                        <div class="mb-md-5"> <!-- mb-md-4 -->
                            <h2 style="color: #1d3b55;" class="fs-1 fw-bold mb-2 text-uppercase pb-3"><?php echo $lang['recuperar']['title']?></h2>
                            <div  class="form-outline form-white input-div">
                                <h5><?php echo $lang['recuperar']['c']?></h5>
                                <input type="hidden" id="constructor-id" value="">
                                <input onkeyup="getChar(this.value);" style="background-color: #9cbfdd; font-size: 25px;" type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="<?php echo $lang['placeholder']['pass']?>" />
                            </div>
                            <div  class="form-outline form-white mb-4 input-div mt-2">
                                <input style="background-color: #9cbfdd; font-size: 25px;" type="password" id="typePasswordConfirmX" class="form-control form-control-lg" placeholder="<?php echo $lang['placeholder']['cpass']?>" />
                            </div>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-char"><?php echo $lang['errors']['char']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-num"><?php echo $lang['errors']['num']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-alpha"><?php echo $lang['errors']['alpha']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-len"><?php echo $lang['errors']['length']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-conn"><?php echo $lang['errors']['conn']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-eq"><?php echo $lang['errors']['same']?></p>
                            <p class="d-none text-danger text-center fs-6 mb-4 pt-2 " id="error-fields"><?php echo $lang['errors']['fillFields']?></p>

                            <p class="text-center text-sucess lead d-none" id="verifiedPass"><?php echo $lang['recuperar']['s']?></p>
                            <a href="javascript:confirmPassword();" class="btn btn-outline-dark btn-lg px-5 fs-1" style="background-color: #013c70; color: white;"><?php echo $lang['input']['submit1']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } 
    else 
    { 
        header('Location: index.php');
    }
?>