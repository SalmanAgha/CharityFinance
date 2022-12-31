  <div  id="page10" style="display: none;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">                                            
            <div class="card" style="padding: 2rem;" >
                <div class="card-body" style="height: 41rem !important;">
                             <div class="row">
                       <label for="example-text-input" class="col-lg-10 col-form-label  C-Modal-Data-title text-center">Business Tabs</label>
                       <div class="col-md-12">
                        <form class="form-horizontal auth-form my-4" action="index.html">
                            <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group row">
                                    <label for="relationship" class="col-sm-4 col-form-label text-align-left">Relationship with other executed requester?</label>
                                    <div class="col-sm-8 "> 
                                        <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="relationship" >
                                            <option value="null" selected disabled>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <span class="help-block custom-block-hide" id="72v"><small ></small></span>
                                    </div>
                                </div><!--end form-group--> 
                                <div class="form-group row">
                                    <label for="reffered" class="col-sm-4 col-form-label text-align-left">Reffered By</label>
                                    <div class="col-sm-8 ">
                                       <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="reffered" placeholder="Enter Reffered By" >
                                    </div> 
                                    <span class="help-block custom-block-hide" id="73v"><small ></small></span>
                                </div>
                            </div><!--end form-group--> 
                            <div class="form-group row">
                                <label for="intention" class="col-sm-4 col-form-label text-align-left">Will/Intention</label>
                                <div class="col-sm-8 ">
                                   <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="intention" placeholder="Enter Will/Intention" >
                                </div> 
                                <span class="help-block custom-block-hide" id="74v"><small ></small></span>
                            </div>
                        </div><!--end form-group--> 
                        <div class="form-group row">
                            <label for="relationship" class="col-sm-4 col-form-label text-align-left">Previous Experience</label>
                            <div class="col-sm-8 "> 
                                <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="relationship" >
                                    <option value="null" selected disabled>Select</option>
                                    <option value="6mnths">Upto 6 months</option>
                                    <option value="1yr">Upto 1 Year</option>
                                    <option value="2yr">Upto 2 Year</option>
                                    <option value="3yr">Upto 3 Year</option>
                                </select>
                                <span class="help-block custom-block-hide" id="75v"><small ></small></span>
                            </div>
                        </div><!--end form-group--> 
                        <div class="form-group row">
                            <label for="relationship" class="col-sm-4 col-form-label text-align-left">Capability</label>
                            <div class="col-sm-8 "> 
                                <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="relationship" >
                                    <option value="null" selected disabled>Select</option>
                                    <option value="expert">Expert</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="notstarted">Not Started</option>
                                </select>
                                <span class="help-block custom-block-hide" id="76v"><small ></small></span>
                            </div>
                        </div><!--end form-group--> 
                        <div class="form-group row">
                            <label for="training/feedback" class="col-sm-4 col-form-label text-align-left">Training/Feedback</label>
                            <div class="col-sm-8 ">
                               <div class="input-group mb-3">
                                <input type="text" class="form-control" id="trainingfeedback" placeholder="Enter Training/Feedback" >
                            </div> 
                            <span class="help-block custom-block-hide" id="77v"><small ></small></span>
                        </div>
                    </div><!--end form-group--> 
                    <div class="form-group row">
                        <label for="verifyremarks" class="col-sm-4 col-form-label text-align-left">Other Verifying Remarks</label>
                        <div class="col-sm-8 ">
                           <div class="input-group mb-3">
                            <input type="text" class="form-control" id="verifyremarks" placeholder="Enter Other Verifying Remarks" >
                        </div> 
                        <span class="help-block custom-block-hide" id="78v"><small ></small></span>
                    </div>
                </div><!--end form-group--> 
                <div class="form-group row">
                    <div class="col-sm-4 "></div>
                    <div class="col-sm-8 ">
                       <div class="input-group mb-3">
                           <button class="btn btn-primary btn-round btn-block waves-effect waves-light" onclick="tabs();" id="btnlogin" type="button">Submit <i class="fas fa-sign-in-alt ml-1"></i></button>
                       </div> 
                       <span class="help-block custom-block-hide" id="9b"><small ></small></span>
                   </div>
               </div><!--end form-group--> 
           </div>
       </form><!--end form-->                                                                                                                     
   </div> 
</div>   
</div><!--end card-body-->
 

            <div class="row login-logo">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <button class="btn btn-primary  btn-block waves-effect waves-light" value="page1" onclick="switching(this.value);" type="button" disabled>Preview</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary  btn-block waves-effect waves-light" value="page2" onclick="switching(this.value);" id="page-two-button" type="button">Next</button>
                </div>
                <div class="col-md-3"></div>
            </div>
 
</div><!--end card-->
</div><!--end col-->
<div class="col-md-1"></div>

</div><!--end row-->   
</div><!--end general detail-->