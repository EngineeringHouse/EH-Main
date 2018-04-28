<template>
    <div>
        <div class="uk-card uk-card-default uk-transform-origin-top-center">
            <div class="uk-card-header">
                <div class="uk-float-left">
                    <h3 class="uk-card-title">{{title}}</h3>
                </div>
                <div class="uk-float-right">
                    <i class="material-icons md-36 uk-text-right power" v-on:click="toggleButton"
                       v-bind:class="{ active: state.active }">power_settings_new</i>
                </div>
            </div>
            <div class="collapsable" v-bind:class="{ inactive: !state.active }">
                <div class="uk-card-body">
                    <label class="uk-form-label" for="form-stacked-select">Select an Option!</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select">
                            <option v-for="option in options" v-if="option.visible">
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
    export default {
        name: "SmartCard",
        components: {},
        props: [
            'title',
            'options'
        ],
        data() {
            return {
                state: {
                    active: false
                },
                toggleButton: () => {
                    this.state.active = !this.state.active;
                }
            }
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