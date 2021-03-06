<?php
include('../templates/headerRegistered.php');
?>
<div class="manageEquipment">
    <div class="container">
        <button type="button" class="btn btn-primary gradient-blue" data-toggle="modal" data-target="#equipmentModal">Add New Equipment <i class="fa fa-plus-circle" aria-hidden="true"></i></button>

        <br><br><br><br>
        <form id="equipmentForm" action="home.php" method="post" autocomplete="on">
            <div class="table-responsive">
            <table class="table table-striped table-sm" >
               <thead class="thead-default">
                <tr>
                   <th><h4>Item</h4></th>
                   <th><h4>Name</h4></th>
                   <th><h4>Stock</h4></th>
                    <th><h4>Price/h(€)</h4></th>
                    <th><h4>Details</h4></th>
                    <th><h4>Sports</h4></th>
                    <th><h4>Unavailable</h4></th>
                    <th><h4>Available</h4></th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td class="centered">
                    <img class="img-responsive" src="http://placehold.it/200x200" style="width:100px" alt=""><br>
                    <input type="submit" class="btn btn-primary gradient-yellow" value="Change representative picture"/>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="itemName" placeholder="Item 1" value="Item 1">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="20" value="20">
                        </div>
                    </div>
                </td>

                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="100" step="1" placeholder="0" value="0">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                      </div>

                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <select class="form-control" name="sports" multiple>
                                  <option value="football">Football</option>
                                  <option value="basketball">Basketball</option>
                                  <option value="tenis">Tenis</option>
                              </select>
                          </div>
                      </div>
                  </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="0" value="0">
                        </div>
                    </div>

                </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                             <select class="form-control" title="">
                          <option>Yes</option>
                          <option>No</option>
                      </select>
                          </div>
                      </div>
                  </td>
            </tr>
              <tr>
                  <td class="centered">
                      <img class="img-responsive" src="http://placehold.it/200x200" style="width:100px" alt=""><br>
                      <input type="submit" class="btn btn-primary gradient-yellow" value="Change representative picture"/>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="text" name="itemName" placeholder="Item 1" value="Item 1">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="20" value="20">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="100" step="1" placeholder="0" value="0">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                      </div>

                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <select class="form-control" name="sports" multiple>
                                  <option value="football">Football</option>
                                  <option value="basketball">Basketball</option>
                                  <option value="tenis">Tenis</option>
                              </select>
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="0" value="0">
                          </div>
                      </div>

                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <select class="form-control" title="">
                                  <option>Yes</option>
                                  <option>No</option>
                              </select>
                          </div>
                      </div>
                  </td>
              </tr>
              <tr>
                  <td class="centered">
                      <img class="img-responsive" src="http://placehold.it/200x200" style="width:100px" alt=""><br>
                      <input type="submit" class="btn btn-primary gradient-yellow" value="Change representative picture"/>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="text" name="itemName" placeholder="Item 1" value="Item 1">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="20" value="20">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="100" step="1" placeholder="0" value="0">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                      </div>

                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <select class="form-control" name="sports" multiple>
                                  <option value="football">Football</option>
                                  <option value="basketball">Basketball</option>
                                  <option value="tenis">Tenis</option>
                              </select>
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="number" name="points" min="0" max="20" step="1" placeholder="0" value="0">
                          </div>
                      </div>

                  </td>
                  <td>
                      <div class="form-group">
                          <div class="input-group">
                              <select class="form-control" title="">
                                  <option>Yes</option>
                                  <option>No</option>
                              </select>
                          </div>
                      </div>
                  </td>
              </tr>
            </tbody>
        </table>
            </div>

            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <input type="submit" class="subBtn btn btn-primary gradient-blue" value="Save"/>
                        <input type="submit" class="subBtn btn btn-primary gradient-red" value="Cancel"/>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.row -->




<!------------------------>

<!-- Modal -->
<div class="modal fade" id="equipmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    New Equipment
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="equipmentForm" action="#" method="post" autocomplete="on" class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon primary">Name</span>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon primary">Stock</span>
                                    <input type="number" class="form-control">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon primary">Details</span>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>


                                    <div class="input-group">
                                        <span class="input-group-addon primary">Price/h</span>
                                        <input class="form-control" type="number" name="points" min="0" max="20" step="1" value="0">
                                    </div>



                                    <div class="input-group">
                                        <span class="input-group-addon primary">Sports</span>
                                        <select class="form-control" name="sports" multiple>
                                            <option value="football">Football</option>
                                            <option value="basketball">Basketball</option>
                                            <option value="tenis">Tenis</option>
                                        </select>
                                    </div>



                                <div class="input-group">
                                    <input type="submit" class="btn btn-primary gradient-yellow" value="Upload representative picture"/>
                                    <img class="img-responsive" src="http://placehold.it/400x400" style="width:200px" alt=""><br>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary gradient-blue">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>

    <?php
include('../templates/footer.php');
?>



<link rel="stylesheet" href="../js/bootstrap-multiselect.css" />
<script src="../js/bootstrap-multiselect.js"></script>

<script>
    $(document).ready(function() {
        $('.modal-body #equipmentForm')
            .find('[name="sports"]')
            .multiselect({
                includeSelectAllOption: true,
                onChange: function(element, checked) {
                    adjustByScrollHeight();
                },
                onDropdownShown: function(e) {
                    adjustByScrollHeight();
                },
                onDropdownHidden: function(e) {
                    adjustByHeight();
                }
            })
            .end();

        function adjustByHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe when hiding the picker
                $iframe.height($body.height());
            }
        }

        function adjustByScrollHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe when showing the picker
                $iframe.height($body.get(0).scrollHeight);
            }
        }
        $('#equipmentForm')
            .find('[name="sports"]')
            .multiselect({
                includeSelectAllOption: true,
                onChange: function(element, checked) {
                    adjustByScrollHeight();
                },
                onDropdownShown: function(e) {
                    adjustByScrollHeight();
                },
                onDropdownHidden: function(e) {
                    adjustByHeight();
                }
            })
            .end();

        function adjustByHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe when hiding the picker
                $iframe.height($body.height());
            }
        }

        function adjustByScrollHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe when showing the picker
                $iframe.height($body.get(0).scrollHeight);
            }
        }
    });
</script>