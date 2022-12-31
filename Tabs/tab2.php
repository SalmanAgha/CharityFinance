<div class="tab-pane fade" id="tab2_data">
    <div class="row">

        <div class="col-md-12">
            <div class="card" style="padding: 2rem;">
                <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center">House
                    Hold Data</label>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal auth-form my-4" action="index.html">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="example-text-input"
                                            class="col-lg-6 col-form-label text-center">Dependents Details</label>
                                        <div class="form-group row">
                                            <label for="fathersname" class="col-sm-4 col-form-label text-align-left">No
                                                of Males</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" value="0" class="form-control numbersOnly"
                                                        onkeyup="function1();" id="NoofMales"
                                                        placeholder="Enter No of Males">
                                                </div> <span class="help-block custom-block-hide" id="11v">
                                            </div>
                                        </div><!--end form-group-->
                                        <div class="form-group row">
                                            <label for="contact" class="col-sm-4 col-form-label text-align-left">No Of
                                                Females</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" value="0" class="form-control numbersOnly"
                                                        onkeyup="function1();" id="NoofFemales"
                                                        placeholder="Enter Females">
                                                </div>
                                                <span class="help-block custom-block-hide" id="12v">

                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group row">
                                            <label for="cnic" class="col-sm-4 col-form-label text-align-left">No of
                                                Dependents</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="NoofDependents" placeholder="Enter Depdendents" disabled>
                                                </div>
                                                <span class="help-block custom-block-hide"
                                                    id="13v"><small></small></span>
                                            </div>
                                        </div><!--end form-group-->
                                        <div class="form-group row">
                                            <label for="cnic" class="col-sm-4 col-form-label text-align-left">No. of
                                                Person Earning</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly" maxlength="13"
                                                        id="NoofPersonEarning" placeholder="Enter No of Person Earning">
                                                </div>

                                            </div><span class="help-block custom-block-hide"
                                                id="14v"><small></small></span>
                                        </div><!--end form-group-->

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Family
                                                Income</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input class="form-control numbersOnly" id="FamilyIncome"
                                                        onkeyup="function2();" value="0"
                                                        placeholder="Enter Family Income">
                                                </div>

                                            </div><span class="help-block custom-block-hide"
                                                id="15v"><small></small></span>
                                        </div><!--end form-group-->

                                    </div>


                                    <div class="col-md-6">
                                        <label for="example-text-input"
                                            class="col-lg-6 col-form-label text-center">Expenses Details</label>

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Monthly
                                                Ration</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="MonthlyRation" onkeyup="function2();" value="0"
                                                        placeholder="Enter Monthly Ration">
                                                </div>
                                            </div><span class="help-block custom-block-hide" id="16v">
                                        </div><!--end form-group-->
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Monthly
                                                HealthCare </label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="MonthlyHealthCare" onkeyup="function2();" value="0"
                                                        placeholder="Enter Monthly HealthCare">
                                                </div> <span class="help-block custom-block-hide" id="17v">
                                            </div>
                                        </div><!--end form-group-->
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Monthly
                                                Education</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="MonthlyEducation"
                                                        onkeyup="function2();" value="0"
                                                        placeholder="Enter Monthly Education">
                                                </div>
                                            </div><span class="help-block custom-block-hide" id="18v">
                                        </div><!--end form-group-->

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Other
                                                Expenses</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="OtherExpenses" onkeyup="function2();" value="0"
                                                        placeholder="Enter Other Expenses">
                                                </div>
                                            </div><span class="help-block custom-block-hide" id="19v">
                                        </div><!--end form-group-->

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Total
                                                Expenses</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="TotalExpenses" disabled placeholder="Enter Total Expenses">
                                                </div>
                                            </div><span class="help-block custom-block-hide" id="20v">
                                        </div><!--end form-group-->

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-align-left">Monthly
                                                Sirplus deficit</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control numbersOnly"
                                                        id="MonthlySirplusdeficit" disabled
                                                        placeholder="Enter Monthly Sirplus Deficit">
                                                </div>
                                            </div><span class="help-block custom-block-hide" id="21v">
                                        </div><!--end form-group-->


                                    </div>




                                </div>
                            </form><!--end form-->
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->
</div><!--end general detail-->