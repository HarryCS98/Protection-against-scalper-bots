<template>
    <!-- Make a div wrapped slider,set height and width -->
    <div style="width:100%;margin:20px auto;height:200px">
        <!-- Using the slider component -->
        <slider ref="slider" :options="options">
            <!-- slideritem wrapped package with the components you need -->
            <slideritem style="height: max-content" v-for="(item,index) in someList" :key="index" :style="item.style"><img :src="item.src" alt="Italian Trulli"></slideritem>
            <!-- Customizable loading -->
            <div slot="loading">loading...</div>
        </slider>
    </div>
</template>
<script>
    // import slider components
    import { slider, slideritem } from 'vue-concise-slider'
    export default {
        el: '#app',
        data () {
            return {
                //data list [array]
                someList:[
                    {
                        src: '../../../img/hot_1.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    },
                    {
                        src: '../../../img/hot_2.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    },
                    {
                        src: '../../../img/hot_3.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    },
                    {
                        src: '../../../img/hot_4.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    },
                    {
                        src: '../../../img/hot_5.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    },
                    {
                        src: '../../../img/hot_6.png',
                        style: {
                            'width': '23.5%',
                            'margin-right': '2%'
                        }
                    }
                ],
                //Slider configuration [obj]
                options: {
                    options: {
                        currentPage: 0,
                        tracking: false,
                        thresholdDistance: 100,
                        thresholdTime: 300,
                        infinite: 4,
                        slidesToScroll: 4,
                        loop: true
                    }
                }
            }
        },
        components: {
            slider,
            slideritem
        }
    }
</script>
