{include file='common/userHeader.tpl'}

<div class="container searchResultsPage">
<div class="row">
    <div class="col-md-4">
    <div id="searchResultsForm">
        <form action="#" method="get" autocomplete="on">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon primary">Name</span>
                    <input type="text" name="name" title="Name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"> Municipality </span>
                    <select class="form-control" name="municipality"  title="Municipality">
                        <option value="" disabled selected>Municipality</option>
                        {html_options values=$municipalityIDs output=$municipalityNames}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"> Sport </span>
                    <select class="form-control" title="Sport" name="sport">
                        <option value="" disabled selected>Sports</option>
                        {foreach $SPORTS as $SPORT}
                            <option value="{$SPORT.sportID}"
                                    {foreach $INFORMATION.sports as $EQUIPMENT_SPORT}
                                        {if $EQUIPMENT_SPORT eq $SPORT.sportID}
                                            selected
                                        {/if}
                                    {/foreach}
                            >{$SPORT.sportName}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon primary">Date</span>
                    <input type="date" title="Date" name="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon primary">Starting Time</span>
                    <input type="time" name="startingTime" title="Starting time" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon primary">Duration</span>
                    <input type="time" name="duration" title="Duration" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon primary">Surface</span>
                    <select class="form-control" title="Surface type" name="surface">
                        <option value="" disabled selected>Surface</option>
                        {foreach $SURFACES as $SURFACE}
                            <option value="{$SURFACE.unnest}"
                            >{$SURFACE.unnest}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon primary">Coverage</span>
                <select class="form-control" name="coverage" title="Space coverage">
                    <option value="null" disabled selected>Coverage</option>
                    <option value="true">Covered</option>
                    <option value="false">Uncovered</option>
                    <option value="null">Indiferent</option>
                </select>
            </div>
            </div>
            <div class="form-group text-center">
            <input type="submit" class="btn btn-primary btn-lg gradient-blue" value="Search"/>
            </div>
        </form>
        </div>
    </div>

    <div class="col-md-8">
<div class="searchResults">
        <div class="searchResultsComplexes">
        <h1 class="page-header">Search Results: <small id="resultsLength">  </small></h1>
            <div id="results">
                {foreach $RESULT as $COMPLEX}
                {strip}
                    <div class="row">
                        <div class="col-md-4">
                            {assign var="filename" value="../../res/img/originals/complex_{$COMPLEX.complexID}.jpg"}

                            {if file_exists($filename)}
                                <img class="img-responsive" src="{$BASE_URL}res/img/thumbs_medium/complex_{$COMPLEX.complexID}.jpg" style="width:100%" alt="">
                            {else}
                                <img class="img-responsive" src="http://placehold.it/600x400" style="width:100%" alt="">
                            {/if}
                        </div>
                        <div class="col-md-8">
                            <h2 id="complexName"> {$COMPLEX.complexName}
                                {if $COMPLEX.rating != null}
                                    {$COUNT = 0}
                                    {while $COUNT < $COMPLEX.rating}
                                        ⭐
                                        {$COUNT = $COUNT + 1}
                                    {/while}
                                {/if}
                            </h2>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="glyphicon glyphicon-globe"></i> {$COMPLEX.complexLocation} </li>
                                <li class="list-group-item"> <i class="fa fa-envelope fa"></i>  {$COMPLEX.complexEmail}</li>
                                <li class="list-group-item"> <i class="fa fa-phone"></i>  {$COMPLEX.complexPhone} </li>
                            </ul>
                            <a class="btn btn-primary btn-lg gradient-blue" id="complexRedirect" href="{$BASE_URL}pages/users/sportComplex.php?complexID={$COMPLEX.complexID}">Check Complex<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <hr>
                {/strip}
                {/foreach}
            </div>
            </div>
</div>
</div>
</div>
</div>



{include file='common/footer.tpl'}


<script>
    searchResults('{$BASE_URL}');
</script>