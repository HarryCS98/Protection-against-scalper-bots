
{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')






    <div class="container-md">
    <mousemovementlogging></mousemovementlogging>
        <div class="row">
            <div class="col p-0">
                {{--                Add in our vue javascript our div with app in it is in our layout file--}}
                <banner></banner>
            </div>
        </div>

        <div class="row ">
            {{--Column 1--}}
            <div class="col text-center background-links d-none d-lg-block" style="border-style: solid">
                <h3><a style="color: white" href="#">RTX 3000 Series</a></h3>
            </div>

            {{--column 2--}}

            <div class="col text-center background-links d-none d-lg-block" style="border-style: solid">
                <h3><a style="color: white" href="#">Ryzen 5000 Series</a></h3>
            </div>

            {{--column 3--}}

            <div class="col text-center background-links d-none d-lg-block" style="border-style: solid">
                <h3><a style="color: white" href="#">X570 Motherboards on Sale</a></h3>
            </div>

        </div>

        <div class="row">


            <div class="col-3">

                <div class="row">
                    <a href="#">
                        <img class="img-fluid overflow-hidden" src="{{asset('img/advert.png')}}">
                    </a>
                </div>
            </div>


            <div class="col-6" style="background-color: #343A40">

                <div class="row shadow-sm" style="background-color: #FFA800">
                    <div class="col text-center shadow" style="">
                        <h3 class="font-weight-bolder">TODAY ONLY</h3>
                    </div>
                </div>

                <div class="row pt-3">

                    <div class="col">
                        <div class="media" style="color: white">
                            <img class="mr-3" src="{{asset('img/pc_case.png')}}" alt="Generic placeholder image">
                            <div class="media-body align-middle">
                                <h5 class="mt-0 font-weight-bold" style="color: #FFA800">Beeline Case</h5>
                                <p>A full ATX case with room for three 140mm radiators along with four fans and a cool
                                    and classy tempered glass side panel</p>
                                <p class="font-weight-bold" style="color: #FFA800">For Only £35</p>
                                <button type="button" class="btn btn-primary"> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="row">
                    <a href="#">
                        <img class="img-fluid overflow-hidden" src="{{asset('img/advert2.png')}}">
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col" style="background-color: #2B2B2B;color: white">

               <div class="row ">

                   <div class="col-12 text-center ">
                       <p class="font-weight-bold pt-3 " style="color: #FFA800; font-size: x-large">Water Cooling</p>
                   </div>

                   <div class="col-12">
                       <ul class="list-unstyled pl-3">
                           <li style="color: #FFA800">CPU Blocks</li>

                                   <li class="ml-5" style="list-style-type: disc">Corsair</li>
                                   <li class="ml-5" style="list-style-type: disc">EK Water blocks</li>



                           <li style="color: #FFA800">Pumps</li>
                           <li class="ml-5" style="list-style-type: disc">Aqua Computer</li>


                           <li style="color: #FFA800">Hard line tubing</li>
                           <li class="ml-5" style="list-style-type: disc">Transparent</li>
                           <li class="ml-5" style="list-style-type: disc">Coloured</li>

                           <li style="color: #FFA800">Soft tubing</li>
                           <li class="ml-5" style="list-style-type: disc">Transparent</li>
                           <li class="ml-5" style="list-style-type: disc">Coloured</li>

                           <li style="color: #FFA800">Fittings</li>
                           <li class="ml-5" style="list-style-type: disc">10-8 mm</li>
                           <li class="ml-5" style="list-style-type: disc">11-8 mm</li>
                           <li class="ml-5" style="list-style-type: disc">13-10 mm</li>

                       </ul>
                   </div>


               </div>




            </div>

            <div class="col" style="background-color: #2B2B2B;color: white">

                <div class="row ">

                    <div class="col-12 text-center ">
                        <p class="font-weight-bold pt-3 " style="color: #FFA800; font-size: x-large">Air Cooling</p>
                    </div>

                    <div class="col-12">
                        <ul class="list-unstyled pl-3">
                            <li style="color: #FFA800">CPU Coolers</li>

                                <li class="ml-5" style="list-style-type: disc">Corsair</li>
                                <li class="ml-5" style="list-style-type: disc">Noctua</li>
                                <li class="ml-5" style="list-style-type: disc">Cooler Master</li>



                            <li style="color: #FFA800">Thermal paste</li>
                            <li class="ml-5" style="list-style-type: disc">Thermal Grizzly</li>
                            <li class="ml-5" style="list-style-type: disc">Arctic Silver</li>


                            <li style="color: #FFA800">Fans by Brand</li>
                            <li class="ml-5" style="list-style-type: disc">Noctua</li>
                            <li class="ml-5" style="list-style-type: disc">Corsair</li>

                            <li style="color: #FFA800">Fans by Size</li>
                            <li class="ml-5" style="list-style-type: disc">120mm</li>
                            <li class="ml-5" style="list-style-type: disc">140mm</li>
                            <li class="ml-5" style="list-style-type: disc">180mm</li>
                            <li class="ml-5" style="list-style-type: disc">200mm</li>

                        </ul>
                    </div>


                </div>

            </div>

            <div class="col" style="background-color: #2B2B2B;color: white">

                <div class="row ">

                    <div class="col-12 text-center ">
                        <p class="font-weight-bold pt-3 " style="color: #FFA800; font-size: x-large">Storage</p>
                    </div>

                    <div class="col-12">
                        <ul class="list-unstyled pl-3">
                            <li style="color: #FFA800">PCI-e 4.0 SSD</li>

                                <li class="ml-5" style="list-style-type: disc">Samsung</li>



                            <li style="color: #FFA800">PCI-e 3.0 SSD</li>
                            <li class="ml-5" style="list-style-type: disc">Samsung</li>
                            <li class="ml-5" style="list-style-type: disc">Kingston</li>


                            <li style="color: #FFA800">SATA SSD</li>
                            <li class="ml-5" style="list-style-type: disc">Samsung</li>
                            <li class="ml-5" style="list-style-type: disc">WD</li>

                            <li style="color: #FFA800">Hard Drive</li>
                            <li class="ml-5" style="list-style-type: disc">Seagate</li>
                            <li class="ml-5" style="list-style-type: disc">WD</li>

                            <li style="color: #FFA800">Storage by Size</li>
                            <li class="ml-5" style="list-style-type: disc">250 GB</li>
                            <li class="ml-5" style="list-style-type: disc">500 GB</li>
                            <li class="ml-5" style="list-style-type: disc">1 TB</li>
                            <li class="ml-5" style="list-style-type: disc">2 TB</li>

                        </ul>
                    </div>


                </div>

            </div>

            <div class="col" style="background-color: #2B2B2B;color: white">

                <div class="row ">

                    <div class="col-12 text-center ">
                        <p class="font-weight-bold pt-3 " style="color: #FFA800; font-size: x-large">Memory</p>
                    </div>

                    <div class="col-12">
                        <ul class="list-unstyled pl-3">
                            <li style="color: #FFA800">Memory by Manufacturer</li>

                                <li class="ml-5" style="list-style-type: disc">Corsair</li>
                                <li class="ml-5" style="list-style-type: disc">Patriot</li>
                                <li class="ml-5" style="list-style-type: disc">8 Pack</li>



                            <li style="color: #FFA800">Memory by Speed</li>
                            <li class="ml-5" style="list-style-type: disc">DDR4</li>
                            <li class="ml-5" style="list-style-type: disc">DDR3</li>
                            <li class="ml-5" style="list-style-type: disc">DDR2</li>
                            <li class="ml-5" style="list-style-type: disc">DDR</li>

                            <li style="color: #FFA800">Memory by MHz</li>
                            <li class="ml-5" style="list-style-type: disc">3600MHz</li>
                            <li class="ml-5" style="list-style-type: disc">3200MHz</li>
                            <li class="ml-5" style="list-style-type: disc">3000MHz</li>
                            <li class="ml-5" style="list-style-type: disc">2666MHz</li>
                            <li class="ml-5" style="list-style-type: disc">2400MHz</li>

                        </ul>
                    </div>


                </div>




            </div>


        </div>

        <div class="row">
        <div class="col">

            <div class="row">
                <div class="col p-0 text-center" style="background-color: #FFA800">
                    <h1 >WHATS HOT</h1>
                </div>

            </div>

            <div class="row" style="background-color: #343A40">

                <whatshot></whatshot>
            </div>
        </div>
        </div>


    </div>


@endsection
