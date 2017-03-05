<?php
include('../templates/headerRegistered.php');
?>

<div class="manageSpaces">
    <div class="container">
        <a href="addSpace.php" class="btn btn-primary gradient-red">Add Space <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" style="width:100%" alt="">
                    </a>
                    <div class="caption ">
                        <h5 class="text-center">Space 1</h5><br>
                        <div class="row">
                            <div class="col-md-7">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Covered: <span> Yes </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Surface: <span> Syntetic grass </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Dimensions: <span> Normal </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Available: <span> Yes </span></label></li>
                                </ul>
                            </div>
                            <div class="totheright col-md-4"><br><br><br>
                                <button type="button" class="btn btn-primary gradient-yellow" data-toggle="modal" data-target="#editSpaceModal">Edit Information</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x400" style="width:100%" alt="">
                    </a>
                    <div class="caption ">
                        <h5 class="text-center">Space 1</h5><br>
                        <div class="row">
                            <div class="col-md-7">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Covered: <span> Yes </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Surface: <span> Syntetic grass </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Dimensions: <span> Normal </span></label></li>
                                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <label> Available: <span> Yes </span></label></li>
                                </ul>
                            </div>
                            <div class="totheright col-md-4"><br><br><br>
                                <button type="button" class="btn btn-primary gradient-yellow" data-toggle="modal" data-target="#editSpaceModal">Edit Information</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Modal -->
        <div class="modal fade" id="editSpaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title text-center" id="myModalLabel">
                            Edit Space 1
                        </h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="#" method="post" autocomplete="on" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon primary">Surface</span>
                                            <select class="form-control" title="">
                                                <option value="" disabled selected></option>
                                                <option>Football</option>
                                                <option>Basketball</option>
                                                <option>Tenis</option>
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon primary">Coverage</span>
                                            <select class="form-control" title="">
                                                <option value="" disabled selected></option>
                                                <option>Football</option>
                                                <option>Basketball</option>
                                                <option>Tenis</option>
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon primary">Dimensions</span>
                                            <select class="form-control" title="">
                                                <option value="" disabled selected></option>
                                                <option>Football</option>
                                                <option>Basketball</option>
                                                <option>Tenis</option>
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon primary">Availability</span>
                                            <select class="form-control" title="">
                                                <option value="" disabled selected></option>
                                                <option>Football</option>
                                                <option>Basketball</option>
                                                <option>Tenis</option>
                                            </select>
                                        </div>


                                        <div class="input-group">
                                            <input type="submit" class="btn btn-primary gradient-yellow" value="Upload representative picture"/>
                                            <img class="img-responsive" src="http://placehold.it/700x400" style="width:400px" alt="">
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary gradient-blue">Submit</button>
                                    </div>


                                    <div class="totheright">
                                        <button type="submit" class="btn btn-primary gradient-red">Delete</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    </div>
</div>
</div>


    <?php
include('../templates/footer.php');
?>
