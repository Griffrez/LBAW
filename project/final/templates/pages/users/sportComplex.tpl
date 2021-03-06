{include file='common/userHeader.tpl'}

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-PQ-WOp9-fxyiuidvq_sPUAxbJviiLdA">
</script>
<div class="sportComplex">
    <div class="container">
        <div class="row">
            {if $SUCCESS_MESSAGES != ""}
                {foreach $SUCCESS_MESSAGES as $message}
                    <div class="alert alert-info alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{$message}</strong>
                    </div>
                {/foreach}
            {/if}
            {if $ERROR_MESSAGES != ""}
                {foreach $ERROR_MESSAGES as $message}
                    <div class="alert alert-danger alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{$message}</strong>
                    </div>
                {/foreach}
            {/if}
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span id="infoName">Complex Name</span></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" id="mainImage">
                <br>
                {if $hasPhoto}
                    <img class="img-responsive" style="width:350px"
                         src="{$BASE_URL}res/img/originals/complex_{$complexID}.jpg" alt="Image of the sports complex">
                {else}
                    <img class="img-responsive" style="width:350px" src="http://placehold.it/750x500" alt="No image">
                {/if}

            </div>
            <div class="col-md-5">

                <h2>Informations:</h2>
                <ul class="list-group">
                    <li class="list-group-item"><i class="glyphicon glyphicon-globe"></i> Location: <span
                                id="infoLocation"></span></li>
                    <li class="list-group-item"><i class="fa fa-envelope fa"></i> Email: <span id="infoEmail"></span>
                    </li>
                    <li class="list-group-item"><i class="fa fa-phone"></i> Contact: <span id="infoContact"></span></li>
                    <li class="list-group-item"><i class="fa fa-clock-o"></i> Opening - Closing Hours: <span
                                id="infoHours"></span></li>
                    <li class="list-group-item"><i class="fa fa-calendar"></i> Open on Weekends? <span
                                id="infoOpenOnWeekends"></span></li>
                    <li class="list-group-item"> Description: <span id="infoDescription"></span></li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="ratingNum" id="rating">

                    </div>
                    <br>
                    <div id="map" style="height:150px; width:300px;"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" id="spaces">
        <hr>
    </div>
</div>

<script>
    $(function () {
        sportComplexPage('{$BASE_URL}', {$complexID});
    });
</script>

{include file='common/footer.tpl'}

