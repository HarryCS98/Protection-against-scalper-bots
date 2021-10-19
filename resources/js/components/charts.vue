
<template>
    <div>
        <!--Loop through how many values there will be (WARNING hacking solution where we pass the ip from php-->

    <li style="list-style: none" v-for="i in data">
        <!--Create the div elements that our graphs will be put in-->
        <div :id="i" style="width:900px;height:500px;"></div>
    </li>

   <!-- <div id="tester" style="width:900px;height:500px;"></div>
    <div id="tester2" style="width:900px;height:500px;"></div>-->
    </div>
</template>
<script>
    export default {
        name: "ExampleComponent",
        props: [
            'data'
        ],
        data: function() {
            return {
            };
        },
        mounted() {
         this.get()
        },


        methods: {

            /*Display the graph*/
            get(){

                //Get the current url of the page  /test/86.123.54.312
                let url = window.location.pathname

                //Clean up the url so its only contains the url
                //TODO change this to reflect the final name of the page
                url = url.replace("/test/","")

                /*console.log('/api/test1/'+ url);*/


                //Create the raw_data variable this will hold our repsonse data from ur axios statment
                let raw_data;



                //Make a query from our api to get all the results from the database
                axios.get('/api/test1/'+ url).then(response => {

                    //Set raw_data equal to our response.data which in turn holds all the results from our query
                    raw_data = response.data;



                 /*   clean_data = raw_data[0].coords.split(",");*/

                    //Create the variable for our for loop
                   let i;

                    console.log(raw_data)

                   //Loop through the amount of results that are returned from our axios api call
                   for(i = 0; i < raw_data.length; i++) {


                       //Create our variables
                       let clean_data = [];
                       let x_data = [];
                       let y_data = [];



                        //Turn our coords from a string into an array which we then store in teh clean_data variable
                       clean_data = raw_data[i]["coords"].split(",");




                       //Create another for loop this lets us loop through the array take every other place in the array and put it in the x data and then the other in the right so it looks like
                       //0 -> x 1-> y 2-> x 3-> y
                       let b;
                       for(b = 0; b < clean_data.length; b++){
                           if(b % 2 == 0){
                               x_data.push(clean_data[b]);
                           }
                           else{
                               y_data.push(clean_data[b]);
                           }
                       }

                      /* console.log("x_data " +  x_data);
                       console.log("y_data " + y_data);*/


                      /* console.log(test);*/

                       //Create all the propertys that our graph will need to plot its self
                       let graph_data= {
                           x: x_data,
                           y: y_data,
                           mode: 'markers',
                           type: 'scatter'
                       };


                       //Formate the data and time so we can display it next to the page name

                       let d = new Date(raw_data[i]["updated_at"]);

                       let datestring = ("0" + d.getDate()).slice(-2) + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" +
                           d.getFullYear() + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + ("0" + d.getSeconds()).slice(-2);


                       //Set up our layout for our graphs
                       let layout = {
                           title: {
                               text: raw_data[i]['url'] + " " + datestring, //The url of the page the graph is of and the time it was taken
                               font: {
                                   family: 'Courier New, monospace',
                                   size: 24
                               },
                               xref: 'paper',
                               x: 0.05,
                           }
                       }



                       //Turn graph_data into an array to pass it over to our plotly command
                       let data = [graph_data];

                       //Add 1 to our i value which gives us the div element that holds the graph this is becuase our array of data starts at 0 but our divs start at 1
                       let div_number = i + 1;

                       //Plot the graph
                       Plotly.newPlot(div_number.toString(), data,layout);


                   }
                });
            }
        }
    }


</script>

