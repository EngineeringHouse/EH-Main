<template>
    <li class="accordion-item">
        <a class="uk-accordion-title" href="#">
            <div class="uk-float-left">
                <h3 class="uk-card-title">MuthaFUCKIN LITE magik</h3>
            </div>
            <div class="uk-float-right">
                <i class="material-icons md-36 uk-text-right power" v-on:click="toggleButton"
                   v-bind:class="{ active: state.active }">power_settings_new</i>
            </div>
        </a>
        <div class="uk-accordion-content">
            <label class="uk-form-label" for="form-stacked-select">Select an Option!</label>
            <div class="uk-form-controls">
                <select class="uk-select" id="form-stacked-select">
                    <option>Option 01</option>
                    <option>Option 02</option>
                </select>
            </div>
        </div>

    </li>

</template>

<script>
    export default {
        name: "SmartAccordianItem",
        components: {},
        data() {
            return {
                state: {
                    active: false
                },
                toggleButton: () => {
                    this.state.active = !this.state.active;
                }
            }
        },
        mounted() {

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
        margin-bottom: -8px;
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