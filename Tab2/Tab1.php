  <div  id="page1">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">                                            
            <div class="card" style="padding: 2rem;" >
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal auth-form my-4" action="index.html">
                            <div class="row">
                               <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-align-left">Email</label>
                                    <div class="col-sm-8 ">
                                       <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="email" placeholder="Enter Email" >
                                    </div> 
                                    <span class="help-block custom-block-hide" id="55v"><small ></small></span>
                                </div>
                            </div><!--end form-group--> 
                            <div class="form-group row">
                                <label for="fullname" class="col-sm-4 col-form-label text-align-left">Full Name</label>
                                <div class="col-sm-8 ">
                                   <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                                </div> 
                                <span class="help-block custom-block-hide" id="56v"><small ></small></span>
                            </div>
                        </div><!--end form-group--> 
                        <div class="form-group row">
                            <label for="fathersname" class="col-sm-4 col-form-label text-align-left">Father's Name</label>
                            <div class="col-sm-8 ">
                               <div class="input-group mb-3">
                                <input type="text" class="form-control" id="fathersname" placeholder="Enter Father's Name">
                            </div> 
                            <span class="help-block custom-block-hide" id="57v"><small ></small></span>
                        </div>
                    </div><!--end form-group--> 
                    <div class="form-group row">
                        <label for="contact" class="col-sm-4 col-form-label text-align-left">Contact</label>
                        <div class="col-sm-8 ">
                           <div class="input-group mb-3">
                            <input type="text" class="form-control numbersOnly" minlength="11"  maxlength="11" id="contact" placeholder="Enter Contact">
                        </div>
                        <span class="help-block custom-block-hide" id="58v"><small ></small></span>
                    </div>
                </div><!--end form-group--> 
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-align-left">City</label>
                    <div class="col-sm-8 "> 
                        <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="city" >
                            <option value="null" selected disabled>Select City</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Sukkur">Sukkur</option>
                        </select>
                        <span class="help-block custom-block-hide" id="59v"><small ></small></span>
                    </div>
                </div><!--end form-group--> 
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-align-left">Net Salary</label>
                    <div class="col-sm-8 ">
                       <div class="input-group mb-3">
                        <input type="text" class="form-control numbersOnly" id="NetSalary" placeholder="Enter Net Salary" >
                    </div> 
                    <span class="help-block custom-block-hide" id="60v"><small ></small></span>
                </div>
            </div><!--end form-group--> 
        </div>
        <div class="col-md-6">
           <div class="form-group row">
            <label for="cnic" class="col-sm-4 col-form-label text-align-left">Cnic</label>
            <div class="col-sm-8 ">
               <div class="input-group mb-3">
                <input type="text" class="form-control numbersOnly" maxlength="13" id="cnic" placeholder="Enter Cnic">
            </div> 
            <span class="help-block custom-block-hide" id="61v"><small ></small></span>
        </div>
    </div><!--end form-group--> 
    <div class="form-group row">
        <label for="fullname" class="col-sm-4 col-form-label text-align-left">Address</label>
        <div class="col-sm-8 ">
           <div class="input-group mb-3">
            <input type="text" class="form-control" id="Address" placeholder="Enter Address">
        </div> 
        <span class="help-block custom-block-hide" id="62v"><small ></small></span>
    </div>
</div><!--end form-group--> 
<div class="form-group row">
    <label for="casetype" class="col-sm-4 col-form-label text-align-left">Applying For</label>
    <div class="col-sm-8 "> 
        <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="casetype" onchange="business_change();">
            <option value="null" selected disabled>Select Type</option>
            <option value="Charity">Charity</option>
            <option value="Zakat">Zakat</option>
            <option value="Business">Business</option>
        </select>
    
    </div>
</div><!--end form-group--> 
<div id="div_businesstype" style="display:none;">
  <div class="form-group row">
    <label for="casetype" class="col-sm-4 col-form-label text-align-left">Nature of Business</label>
    <div class="col-sm-8 "> 
        <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="natureofbusiness" onchange="business_change2();">
            <option value="null" selected disabled>Select here</option>
            <option value="Business1">Nature of Business 1</option>
            <option value="Business2">Nature of Business 2</option>
            <option value="Business3">Nature of Business 3</option>
            <option value="Others">Others</option>
        </select>
        <span class="help-block custom-block-hide" id="63v"><small ></small></span>
    </div>
</div><!--end form-group--> 
</div>
<div id="div_othernature" style="display:none;">
    <div class="form-group row">
        <label for="otherbusiness" class="col-sm-4 col-form-label text-align-left">Other Business</label>
        <div class="col-sm-8 ">
           <div class="input-group mb-3">
            <textarea class="form-control" id="otherbusiness" placeholder="Enter Other Business Description"></textarea> >
        </div>
        <span class="help-block custom-block-hide" id="64v"><small ></small></span>
    </div>
</div><!--end form-group--> 
</div>
<div class="form-group row">
    <label for="casedesc" class="col-sm-4 col-form-label text-align-left">Case Description</label>
    <div class="col-sm-8 ">
       <div class="input-group mb-3">
        <textarea class="form-control" id="casedesc" placeholder="Enter Case Description"></textarea> >
    </div>
    <span class="help-block custom-block-hide" id="65v"><small ></small></span>
</div>
</div><!--end form-group--> 
 
</div>
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