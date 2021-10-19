<template>
    <div>
    </div>
</template>
<script>
    export default {
        created() {
            //Run our Methods
             this.inital_Entry_Create();
             this.mouse_Movements_Collect();
        },

    methods: {


            /*add mouse movement into the database*/
            mouse_Movements_Collect(){
                let xpos = [];
                let ypos = [];
                let counter = 0;
                let url = window.location.pathname;
                let ip;
                if(url == '/'){
                    url = '/landing_page'
                }
                /*Remove all slashes out of our variable*/
                let url = url.replace("/","");
                    url = url.replace("/","_");
                    url = url.replace("/","_");


                //Get ip of the client
                fetch('https://api.ipify.org?format=json')
                    .then(response => response.json())
                    .then(response => {
                        ip = response.ip;
                    })


                //Log mouse movement on every 1000 mouse event triggers
                onmousemove = function(e) {

                    xpos[counter] = e.clientX;
                    ypos[counter] = e.clientY;
                    //Cant send to many requests to our api so do it evey 1000 mouse movement updates
                    if (counter % 1000 == 0 && counter != 0){

                        axios.post('/api/mousemovement/add', {
                            xpos: xpos,
                            ypos: ypos,
                            ip: ip,
                            url: url
                        })
                            .then((response) => {
                                console.log(response);
                            }, (error) => {
                                console.log(error);
                            });

                       /* axios.post('/api/mousemovement/add/' + data + "/" + ip + "/" +  url).then (response =>{
                        })*/
                    }

                    console.log(counter + " Counter")

                    counter++;

                }

                //Log mouse movement when page is closed
                onbeforeunload = function(e){
                    axios.post('/api/mousemovement/add', {
                        xpos: xpos,
                        ypos: ypos,
                        ip: ip,
                        url: url
                    })
                        .then((response) => {
                            console.log(response);
                        }, (error) => {
                            console.log(error);
                        });
                }

                /*Log mouse movement of mouse click */
                onclick = function () {
                    axios.post('/api/mousemovement/add', {
                        xpos: xpos,
                        ypos: ypos,
                        ip: ip,
                        url: url
                    })
                        .then((response) => {
                            console.log(response);
                        }, (error) => {
                            console.log(error);
                        });
                }
            },


            /*Create the database entry with all of information*/
            inital_Entry_Create(){
                let first_data=[];
                let url = window.location.pathname;
                url = url.replace('/','');
                url = url.replace('/','_');



               if(url == ''){
                   url = 'landing_page'
               }

               first_data[1] = "/" +  url.replace("/","_");
                fetch('https://api.ipify.org?format=json')
                    .then(response => response.json())
                    .then(response => {
                        first_data[0] = response.ip;
                        axios.post('/api/mmdocument/create/' + first_data[0] + first_data[1]).then (response =>{
                        })
                    });
            }

        }

    }


</script>
