<template>
    <div>
        <div class="uk-card uk-card-default uk-transform-origin-top-center">
            <div class="uk-card-header">
                <div class="uk-float-left">
                    <h3 class="uk-card-title">{{title}}</h3>
                </div>
                <div class="uk-float-right">
                    <i class="material-icons md-36 uk-text-right power" v-on:click="toggleButton"
                       v-bind:class="{ active: state.active }"> power_settings_new </i>
                </div>
            </div>
            <div class="collapsable" v-bind:class="{ inactive: !state.active }" v-on:change="sendCall">
                <div class="uk-card-body">
                    <label class="uk-form-label" for="form-stacked-select">Select an Option!</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" v-on:change="sendCall">
                            <option v-for="option in options" v-if="option.visible" :selected="initial == option.name">
                                {{option.human}}
                            </option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    let options;
    let ID;
    let mainThing;
    let initial;
    export default {
        name: "SmartCard",
        components: {},
        props: [
            'title',
            'options',
            'itemID',
            'initial'
        ],
        data() {
            return {
                state: {
                    active: (initial != "OFF")
                },
                toggleButton: () => {
                    if (this.state.active) {
                        mainThing.$http.post(`api/rooms/8126/modules/${ID}`, {
                            status: "OFF"
                        }).then((stuff) => {
                            console.log(stuff);
                            mainThing.$emit('updated', stuff.data);
                        })
                    }
                    this.state.active = !this.state.active;
                }
            }
        },
        methods: {
            sendCall: (event) => {
                let val = event.target.value;
                let key;
                for (let option of options) {
                    if (option.human == val) {
                        key = option;
                        break;
                    }
                }
                console.log(key);
                mainThing.$http.post(`api/rooms/8126/modules/${ID}`, {
                    status: key.name
                }).then((stuff) => {
                    console.log(stuff);
                    mainThing.$emit('updated', stuff.data);
                })
            }
        },
        created: function () {
            options = this.options;
            ID = this.itemID;
            mainThing = this;
            initial = this.initial;
        }

    };
</script>

<style scoped>
    .power {
        color: red;
        user-select: none;
    }

    .power.active {
        color: green;
        background-color: rgba(0, 0, 0, .1);
        border-radius: 100%;
    }

    .uk-card-header {
        border: none;
        margin: 10px;
    }

    .uk-card-title {
        margin: 0;
    }

    .uk-card-body {
        padding-top: 10px;
    }

    .uk-float-right,
    .uk-float-left {
        margin-bottom: -10px;
    }

    .collapsable {
        transform-origin: top;
        transition: 250ms transform, 250ms max-height;
        max-height: 400px;
        transform: scaleY(1);
    }

    .collapsable.inactive {
        transform-origin: top;
        transition: 250ms transform, 250ms max-height;
        max-height: 0;

        transform: scaleY(0);
    }
</style>