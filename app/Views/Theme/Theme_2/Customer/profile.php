<section class="main-container my-5">
    <div class="container">
        <form action="<?php echo base_url('profile_update_action')?>" method="Post" onsubmit="return onProfileForm()">
        <div class="card border rounded-0">
            <div class="card-body p-3 p-md-5">
                <div class="row mb-4">
                    <div class="col-md-12 px-5">
                        <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                    </div>
                    <div class="col-md-6 px-5">
                        <h6 class="mt-4">Contact information</h6>
                        <div class="form-group mt-4">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control  in_err" id="fname1"  placeholder="First Name" value="<?php echo $customer->firstname?>" required>
                            <span class="text-danger err d-inline-block text-capitalize" id="fnameError"></span>
                        </div>

                        <div class="form-group mt-4">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control in_err" id="lname1"  placeholder="Last Name" value="<?php echo $customer->lastname?>" required>
                            <span class="text-danger err d-inline-block text-capitalize " id="lnameError"></span>
                        </div>

                        <div class="form-group mt-4">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control in_err" id="email" placeholder="Email" value="<?php echo $customer->email?>" required>
                            <span class="text-danger err d-inline-block text-capitalize " id="emailError"></span>
                        </div>


                        <div class="form-group mt-4">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control in_err" id="payment_phone"  placeholder="Phone" value="<?php echo $customer->phone?>" required>
                            <span class="text-danger err d-inline-block text-capitalize" id="paymentPhoneError"></span>
                        </div>




                    </div>
                    <div class="col-md-6 px-5">
                        <h6 class="mt-4">Address</h6>
                        <div class="form-group mt-4">
                            <label>Address line 1 <span>*</span></label>
                            <input type="text" name="address_1" class="form-control in_err" id="payment_address_1" placeholder="Address line 1" value="<?php echo !empty($address->address_1)?$address->address_1:'';?>" required>
                            <span class="text-danger err d-inline-block text-capitalize" id="paymentAddressError"></span>
                        </div>

                        <div class="form-group mt-4">
                            <label>Address line 2 </label>
                            <input type="text" name="address_2" class="form-control in_err" id="payment_address_2" placeholder="Address line 2" value="<?php echo !empty($address->address_2)?$address->address_2:'';?>" >
                            <span class="text-danger err d-inline-block text-capitalize" id="paymentAddress2Error"></span>
                        </div>


                        <div class="form-group mt-4">
                            <label class="w-100" for="phone">Country</label>
                            <select name="country_id" class="form-control in_err" id="countryName1"  onchange="selectState(this.value,'stateView')" required>
                                <option value="" >Please select</option>
                                <?php echo country(!empty($address->country_id)?$address->country_id:'');?>
                            </select>
                            <span class="text-danger err d-inline-block text-capitalize" id="countryNamePhoneError"></span>
                        </div>

                        <div class="form-group mt-4">
                            <label class="w-100" for="payment_city">District</label>
                            <select name="zone_id" class="form-control in_err" id="stateView" required >
                                <option value="" >Please select</option>
                                <?php echo state_with_country(!empty($address->country_id)?$address->country_id:'',!empty($address->zone_id)?$address->zone_id:'');?>
                            </select>
                            <span class="text-danger err d-inline-block text-capitalize" id="stateViewPhoneError"></span>
                        </div>


                        <div class="form-group mt-4">
                            <label>Postal code <span>*</span></label>
                            <input type="text" name="postcode" id="payment_postcode" class="form-control in_err" placeholder="Postal code" value="<?php echo !empty($address->postcode)?$address->postcode:'';?>" required>
                            <span class="text-danger err d-inline-block text-capitalize" id="paymentPostcodeError"></span>
                        </div>


                    </div>
                    <div class="col-md-6 px-5" style="margin-top:120px;">
                        <div class="form-group mt-4">
                            <div class="custom-control custom-checkbox" id="pasShow">
                                <input class="custom-control-input"  onclick="pass_show(this.value)" type="checkbox" id="passReset" value="1" >
                                <label for="passReset" class="custom-control-label">Change password</label>
                            </div>
                        </div>
                        <div id="pass-data"></div>
                    </div>
                    <div class="col-md-6 px-5" style="margin-top:120px;">
                        <?php
                        $newChe = is_exists('cc_newsletter','customer_id',newSession()->cusUserId);
                        if ($newChe == true){
                            ?>
                            <h6 class="mt-4">Newsletter</h6>
                            <p>You Aren't Subscribed To Our Newsletter</p>
                            <div class="form-group mt-4">
                                <div class="custom-control custom-checkbox">
                                    <input name="subscription" class="custom-control-input" type="checkbox" id="subscription" >
                                    <label for="subscription" class="custom-control-label">General subscription</label>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-default bg-custom-color text-white rounded-0 ">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </form>
    </div>
</section>