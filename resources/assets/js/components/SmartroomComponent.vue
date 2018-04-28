<template>
    <div>
        <h1 class="uk-heading-line uk-text-center white-text"><span> Smart Rooms </span></h1>
        <div class="ninety-width" uk-scrollspy="target: div.uk-card; cls:uk-animation-scale-up; delay: 100;">
            <smart-card v-for="item in items"
                        v-bind:title="`(${item.id}) ${item.type}`"
                        v-bind:options="types[item.type]"
                        :key="item.id">
            </smart-card>

        </div>
    </div>
</template>

<script>
    import SmartCard from "./SmartCard";

    export default {
        name: "SmartroomComponent.vue",
        components: {SmartCard},
        data() {
            return {
                items: [
                    {
                        id: "1",
                        "i2c_address": "0x04",
                        "type": "led",
                        "data": "{\"length\":1,\"status\":\"OFF\"}",
                        "room_id": 1,
                        "created_at": "2018-04-28 01:22:25",
                        "updated_at": "2018-04-28 01:22:25"
                    },
                    {
                        id: "2",
                        "i2c_address": "0x08",
                        "type": "led",
                        "data": "{\"length\":1,\"status\":\"OFF\"}",
                        "room_id": 1,
                        "created_at": "2018-04-28 01:22:25",
                        "updated_at": "2018-04-28 01:22:25"
                    },
                    {
                        id: "3",
                        "i2c_address": "0x0B",
                        "type": "led",
                        "data": "{\"length\":1,\"status\":\"ON\"}",
                        "room_id": 1,
                        "created_at": "2018-04-28 01:22:25",
                        "updated_at": "2018-04-28 01:22:25"
                    }
                ],
                types: {
                    led: [
                        {
                            name: "ERROR",
                            human: "oopsie whoopsie! uwu we made a fucky wucky!!1 a wittle fucko boingo! the code monkies at our headquarters are working VEWY HAWD to fix this!",
                            visible: false,
                            value: 0
                        },
                        {
                            name: "RGB_FADE_1",
                            human: "fade between colors type-1",
                            visible: true,
                            value: 1
                        },
                        {
                            name: "WHITE",
                            human: "turn white",
                            visible: true,
                            value: 2
                        },
                        {
                            name: "RGB_COLOR_WIPE",
                            human: "as much rainbow as you can get with plain red blue and green",
                            visible: true,
                            value: 3
                        },
                        {
                            name: "RGB_FADE_2",
                            human: "fade between colors type-2",
                            visible: true,
                            value: 4
                        }
                    ],
                    blind: [
                        {
                            name: "DOWN",
                            human: "push shades down",
                            visible: true,
                            value: 0
                        },
                        {
                            name: "UP",
                            human: "push shades up",
                            visible: true,
                            value: 1
                        },
                        {
                            name: "IDLE",
                            human: "push shades stop",
                            visible: true,
                            value: 2
                        }
                    ]
                }
            }
        },
        mounted() {
            this.$http.get("/api/rooms/8126").then(function(r) {

            })
        }
    };
</script>

<style scoped>

</style>