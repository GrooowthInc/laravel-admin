<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">COPY Component</div>

                    <div class="panel-body">
                        I'm an COPY component!
                        <router-link to="/ex">Go to 例</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
