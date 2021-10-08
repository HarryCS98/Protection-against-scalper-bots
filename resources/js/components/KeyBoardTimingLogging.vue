<template>
    <div>
        <div class="container">

            <div class="row pt-5 ">
                <div class="col-md">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First name</label>
                                <input type="text" class="form-control" @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" id="firstName"   placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <label>Last name</label>
                                <input type="text" class="form-control"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" id="lastName"  placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label>Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="example@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" class="form-control" id="address"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required="">
                                    <option>UK</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Zip</label>
                                <input type="text" class="form-control" id="zip"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name on card</label>
                                <input type="text" class="form-control" id="cc-name"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="" required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Credit card number</label>
                                <input type="text" class="form-control" id="cc-number"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>CVV</label>
                                <input type="text" class="form-control" id="cc-cvv"  @keydown="FocusQuery"  @keydown.ctrl.86="Disable_Paste" @keydown.shift.45="Disable_Paste" v-on:click.right="Disable_Paste" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <a class="btn btn-primary btn-lg btn-block mb-5" href="http://ushop.com/success">Pay Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { focus } from 'vue-focus';
    export default {
        directives: { focus: focus },
        data: function() {
            return {
                data: [],
                ip: 0,
            };
        },

        created() {
            this.inital_Entry_Create();
        },


        methods: {

            inital_Entry_Create(){
                if(this.ip == 0) {
                    fetch('https://api.ipify.org?format=json')
                        .then(response => response.json())
                        .then(response => {
                            this.ip = response.ip;
                            var url = window.location.pathname;
                            axios.post('/api/keyboardcreate/' + this.ip  + url).then (response =>{
                               /* console.log(response.data)*/
                            })
                        });
                }

            },


            /* we want to get the initial value when the box is clicked*/
            FocusQuery(){


                    this.time_Collect();

            },

            time_Collect(){

               var time = performance.now();

                this.data.push(time);

                var counter = 0;

                if (this.data.length != 0 && this.data.length % 2 === 0){

                    var length = this.data.length - 1;

                    var time = this.data[length] - this.data[length - 1]

                    var url = window.location.pathname;

                    axios.post('/api/keyboard_data/' + this.ip  + url + '/' + time).then (response =>{
                    })

                    if (time < 3){
                           //This if statement is as it tries to insert again after the page reloads and it bans the user
                           if(this.ip != 0) {
                               axios.post('api/bannedip/' + this.ip).then(response => {
                               })
                               //TODO re-enable for protection
                               window.location = window.location.href;
                        }

                    }
                }
            },



            /*Disables copy paste using ctrl+v , shift-insert and right click*/
            Disable_Paste: function (event) {
                event.preventDefault()
            }

        }
    };


</script>
