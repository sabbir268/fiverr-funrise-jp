<?php
include('inc/header.php');
?>
<section class="sec-padding donation-section" style="background-image: url('img/jp/donation-bg.jpeg');">
    <div class="container">
        <div class="donation-form-outer">
            <h2 class="text-thm">IMMEDIATE CASH ADVANCE </h2>
            <h1 class="text-thm" style="padding-top: 0px; margin-top: 0px;">$1000 – $500,000</h1>
            <ul class="feature">
                <li class="feature-list">Immediate cash</li>
                <li class="feature-list">Direct lender</li>
                <li class="feature-list">24/7</li>
                <li class="feature-list">No credit check</li>
                <li class="feature-list">No risk, only pay if you win</li>
                <li class="feature-list">$1000-$500,000</li>
            </ul>

            <div style="clear: both;"></div>
            <hr>
            <form action="forms/apply.php" method="post">
                <!--Form Portlet-->
                <div class="form-portlet">
                    <div class="row clearfix">

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">First Name <span class="required">*</span></div>
                            <input type="text" required placeholder="Jhon" name="first_name">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Last Name <span class="required">*</span></div>
                            <input type="text" required placeholder="Doe" name="last_name">
                        </div>
                        <div class="col-md-12 w-100">
                            <hr>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Case Type <span class="required">*</span></div>
                            <select name="case_type" class="form-control" id="" required>
                                <option value="">Select case type</option>
                                <option value="Animal Bite"> Animal Bite </option>
                                <option value="Attorney Funding"> Attorney Funding </option>
                                <option value="Auto Accidents"> Auto Accidents </option>
                                <option value="Breach of Contract"> Breach of Contract </option>
                                <option value="Civil Rights"> Civil Rights </option>
                                <option value="Commercial Litigation"> Commercial Litigation </option>
                                <option value="Construction Accident"> Construction Accident </option>
                                <option value="Disability"> Disability </option>
                                <option value="Discrimination"> Discrimination </option>
                                <option value="FELA (Railroad)"> FELA (Railroad) </option>
                                <option value="Fire Fighter Foam"> Fire Fighter Foam </option>
                                <option value="Hernia Mesh"> Hernia Mesh </option>
                                <option value="Hip Replacement Lawsuits"> Hip Replacement Lawsuits </option>
                                <option value="IVC Filter"> IVC Filter </option>
                                <option value="Jones Act-Maritime"> Jones Act-Maritime </option>
                                <option value="Labor Law"> Labor Law </option>
                                <option value="Legal Malpractice"> Legal Malpractice </option>
                                <option value="Medical Malpractice/Negligence"> Medical Malpractice/Negligence </option>
                                <option value="Motor Vehicle Accident"> Motor Vehicle Accident </option>
                                <option value="Motorcycle Accident"> Motorcycle Accident </option>
                                <option value="Other"> Other </option>
                                <option value="Pharmaceutical Cases"> Pharmaceutical Cases </option>
                                <option value="Police Brutality"> Police Brutality </option>
                                <option value="Premises Liability"> Premises Liability </option>
                                <option value="Product Liability"> Product Liability </option>
                                <option value="Round Up Pesticide"> Round Up Pesticide </option>
                                <option value="Settled Case"> Settled Case </option>
                                <option value="Sexual Harassment/Assault"> Sexual Harassment/Assault </option>
                                <option value="Slip and Fall"> Slip and Fall </option>
                                <option value="Social Security"> Social Security </option>
                                <option value="Surgery Funding"> Surgery Funding </option>
                                <option value="Wage Claim/Loss of Profit"> Wage Claim/Loss of Profit </option>
                                <option value="Worker Compensation/3rd party"> Worker Compensation/3rd party </option>
                                <option value="Wrongful Death MVA"> Wrongful Death MVA </option>
                                <option value="Wrongful Death Negligence"> Wrongful Death Negligence </option>
                                <option value="Wrongful Termination"> Wrongful Termination </option>
                                <option value="Wrongful Termination/Discrimination"> Wrongful Termination/Discrimination </option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Case Type If Other <span class="required"></span> </div>
                            <input type="text" required="" placeholder="Write your case type" value="" name="case_type_other">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">How much money do you need? <span class="required">*</span> </div>
                            <input type="text" required="" placeholder="50000" value="" name="amount">
                        </div>

                        <div class="col-md-12 w-100">
                            <hr>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Street Address <span class="required">*</span></div>
                            <input type="text" placeholder="Street" name="street" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">City <span class="required">*</span></div>
                            <input type="text" required="" placeholder="City " value="" name="city">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">State <span class="required">*</span></div>
                            <select name="state" class="form-control" id="" required>
                                <option value="">Select state</option>
                                <option value="Alabama"> Alabama </option>
                                <option value="Alaska"> Alaska </option>
                                <option value="Arizona"> Arizona </option>
                                <option value="Arkansas"> Arkansas </option>
                                <option value="California"> California </option>
                                <option value="Colorado"> Colorado </option>
                                <option value="Connecticut"> Connecticut </option>
                                <option value="D.C."> D.C. </option>
                                <option value="Delaware"> Delaware </option>
                                <option value="Florida"> Florida </option>
                                <option value="Georgia"> Georgia </option>
                                <option value="Hawaii"> Hawaii </option>
                                <option value="Idaho"> Idaho </option>
                                <option value="Illinois"> Illinois </option>
                                <option value="Indiana"> Indiana </option>
                                <option value="Iowa"> Iowa </option>
                                <option value="Kansas"> Kansas </option>
                                <option value="Kentucky"> Kentucky </option>
                                <option value="Louisiana"> Louisiana </option>
                                <option value="Maine"> Maine </option>
                                <option value="Maryland"> Maryland </option>
                                <option value="Massachusetts"> Massachusetts </option>
                                <option value="Michigan"> Michigan </option>
                                <option value="Minnesota"> Minnesota </option>
                                <option value="Mississippi"> Mississippi </option>
                                <option value="Missouri"> Missouri </option>
                                <option value="Montana"> Montana </option>
                                <option value="Nebraska"> Nebraska </option>
                                <option value="Nevada"> Nevada </option>
                                <option value="New Hampshire"> New Hampshire </option>
                                <option value="New Jersey"> New Jersey </option>
                                <option value="New Mexico"> New Mexico </option>
                                <option value="New York"> New York </option>
                                <option value="North Carolina"> North Carolina </option>
                                <option value="North Dakota"> North Dakota </option>
                                <option value="Ohio"> Ohio </option>
                                <option value="Oklahoma"> Oklahoma </option>
                                <option value="Oregon"> Oregon </option>
                                <option value="Pennsylvania"> Pennsylvania </option>
                                <option value="Rhode Island"> Rhode Island </option>
                                <option value="South Carolina"> South Carolina </option>
                                <option value="South Dakota"> South Dakota </option>
                                <option value="Tennessee"> Tennessee </option>
                                <option value="Texas"> Texas </option>
                                <option value="Utah"> Utah </option>
                                <option value="Vermont"> Vermont </option>
                                <option value="Virginia"> Virginia </option>
                                <option value="Washington"> Washington </option>
                                <option value="West Virginia"> West Virginia </option>
                                <option value="Wisconsin"> Wisconsin </option>
                                <option value="Wyoming"> Wyoming </option>
                            </select>
                        </div>


                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Zipcode <span class="required">*</span></div>
                            <input type="text" required="" placeholder="Zipcode" name="zipcode">
                        </div>


                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Email Address<span class="required">*</span></div>
                            <input type="email" placeholder="example@mydomain.com" name="email" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <div class="field-label">Phone Number<span class="required">*</span></div>
                            <input type="text" placeholder="(201) 823-2356" name="phone" required>
                        </div>


                        <div class="col-md-12 w-100">
                            <hr>
                        </div>

                    </div>
                </div>

                <div class="form-portlet text-center">
                    <button class="thm-btn" type="submit">Submit Application</button>
                </div>

            </form>
        </div>
    </div>
</section>

<section class="home-serivce sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-gesture-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Immediate Cash Advance <br> $500–$500,000</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-people-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Fast & Easy <br> Application Process</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-hand"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Same Day <br>Approval</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-hand"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>No Application Fee or Monthly Payments</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-people-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>We Do <br> All the Work!</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-hand"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Only Pay <br> If You Win</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-gesture-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Direct Lender <br> No Middleman</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-gesture-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>No Credit Checks – No Income Verification</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
include('inc/footer.php');
?>