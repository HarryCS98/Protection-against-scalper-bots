<template>
    <!-- Make a div wrapped slider,set height and width -->
    <div style="width:auto;height:29vh" class="d-none d-lg-block">
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
        data () {
            return {
                //data list [array]
                someList:[
                    {
                        src: '../../../img/banner1.png',
                        style: {

                        }
                    },
                    {
                        src: '../../../img/banner2.png',
                        style: {

                        }
                    }
                ],
                //Slider configuration [obj]
                options: {
                    currentPage: 0,
                    direction:'vertical',
                    thresholdDistance: 500,
                    thresholdTime: 100,
                    autoplay: 3000,
                    loop: true,
                    effect:'fade',
                    itemAnimation: true,
                    loopedSlides: 1,
                    slidesToScroll: 1
                }
            }
        },
        components: {
            slider,
            slideritem
        }
    }
</script>
