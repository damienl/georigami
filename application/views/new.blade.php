@layout('layout')

@section('content')
   
            <h2>Select area</h2>
            <form id='paramform' class='form-horizontal'>

 

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#setarea" data-toggle="tab">Set area</a></li>
                    <li><a href="#setslices" data-toggle="tab">Set slices</a></li>

                </ul>

                <div class="tab-content">

	                <div class="tab-pane active" id="setarea"> 

                        <div class="row">
                            <div class="span5">

                                <div class='control-group'>
        							<label class="control-label" for="input-latitude">Latitude</label>
        							<div class="controls"><input type="number" step="any" min="-90" max="90" id="input-latitude" class="span2 livechange"></div>
                                </div>
                                <div class='control-group'>
        							<label class="control-label" for="input-longitude">Longitude</label>
        							<div class="controls"><input type="number" step="any" min="-180" max="180" id="input-longitude" class="span2 livechange"></div>
                                </div>
                                <div class='control-group'>
        							<label class="control-label" for="input-search">Search by name</label>
        							<div class="controls"><input type="text" id="input-search" placeholder="Type something…" class="span2" value=""></div>
                                    <div id="search-result"></div>
                                </div>

                            </div>
                            
                            <div class="span5">
                                <div class='control-group'>
                                    <label class="control-label" for="input-width">Width</label>
                                    <div class="controls"><input type="number" step="1" min="1" id="input-width" class="span1 livechange"> m</div>
                                </div>
                                <div class='control-group'>
                                    <label class="control-label" for="input-height">Height</label>
                                    <div class="controls"><input type="number" step="1" min="1" id="input-height" class="span1 livechange"> m</div>
                                </div>
                            </div>


                        </div>


					</div>





					<div class="tab-pane" id="setslices">   

                        <div class="row">
                            <div class="span5">          

                                <div class='control-group'>
                                    <label class="control-label" for="input-horizontal-slices">horizontal slices</label>
                                    <div class="controls"><input type="number" step="1" min="2" max="500" id="input-horizontal-slices" class="span1 livechange"> (max 100)</div>
                                </div>

                                <div class='control-group'>
        							<label class="control-label" for="input-vertical-slices">vertical slices</label>
        							<div class="controls"><input type="number" step="1" min="2" max="500" id="input-vertical-slices" class="span1 livechange"> (max 100)</div>
                                </div>

                            </div>
                            
                            <div class="span5">

                                <div class='control-group'>
                                    <label class="control-label" for="input-sampling">X sampling</label>
                                    <div class="controls"><input type="number" id="input-sampling" class="span1 livechange"  step="1" min="1"></div>
                                </div>
                                <div class='control-group'>
                                    <label class="control-label" for="input-horizontal-samples">horizontal slices samples</label>
                                    <div class="controls"><input type="number" id="input-horizontal-samples" class="span1 uneditable-input" readonly="readonly"> (max 512)</div>
                                </div>
                                <div class='control-group'>
                                    <label class="control-label" for="input-vertical-samples">vertical slices samples</label>
                                    <div class="controls"><input type="number" id="input-vertical-samples" class="span1 uneditable-input"  readonly="readonly"> (max 512)</div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
 

                </div>                  
                    
                <p id='request-count'  class="span5"></p>    
                <p id='location-count' class="span5"></p>


                <!--button id="update-btn" class="btn btn-primary btn-small span4">Update</button-->                    
                    
			    </form>

                

            	<div id="map-canvas"></div>                

			    <button id="start-btn" class="btn btn-primary btn-large span4">Load data</button>
                <div id="status"><p class='text'></p></div>
                <div id="resultats"></div>
@endsection





          

@section('script')           
        <script>

            var Georigami={
                area: {
                    lat:42.840467241791764,
                    lng:-0.4395133789062129,
                    width:1000, 
                    height:1000,
                    vSlices:20,
                    hSlices:20,
                    sampling:2
                    
                }
            };

  
            $(function() {  Georigami.initNew();    });

        </script>
@endsection      
