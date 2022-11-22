<template>
    <div class="banner-vitals">
        <div class="">
            <div class="col-sm-4">
                <nav class="vitals-nav">
                    <div class="nav nav-tabs flex-sm-column" id="nav-tab" role="tablist">
                        <button
                            class="nav-link px-5 active"
                            id="nav-car-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-home"
                            type="button"
                            role="tab"
                            aria-controls="nav-home"
                            aria-selected="true"
                        >
                            My Car
                        </button>

                        <button
                            class="nav-link px-5"
                            id="nav-navigation-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-navigation"
                            type="button"
                            role="tab"
                            aria-controls="nav-sell"
                            aria-selected="false"
                        >
                            Navigation
                        </button>

                        <button
                            class="nav-link px-5"
                            id="nav-maps-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-maps"
                            type="button"
                            role="tab"
                            aria-controls="nav-maps"
                            aria-selected="false"
                        >
                            Maps
                        </button>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 vitals-body">
                    <div class="">
                        <div class="card-body p-4 p-sm-5">
                            <div class="tab-content pt-4" id="nav-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="nav-home"
                                    role="tabpanel"
                                    aria-labelledby="nav-car-tab"
                                    tabindex="0"
                                >

                                    Car over view tab
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="nav-navigation"
                                    role="tabpanel"
                                    aria-labelledby="nav-navigation-tab"
                                    tabindex="0"
                                >
                                    Car Navigating
                                </div>

                                <div
                                    class="tab-pane fade vitals-body-maps"
                                    id="nav-maps"
                                    role="tabpanel"
                                    aria-labelledby="nav-maps-tab"
                                    tabindex="0"
                                >
                                    Google maps
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "VehicleVitalsComponent.vue"
}

</script>

<style scoped>
.vitals-nav{
    padding-top: 23vh;
    position: fixed;
    left: 0;
    top: 55px;
    height: 75vh;
    width: 25%;
}
.vitals-body{
    width: 75%;
    right: 0;
    top: 55px;
    position: fixed;
    background-color: rgba(255, 255, 255, 0.83);
    height: 75vh;
}
.vitals-body-maps{
    background-color: rgba(255, 255, 255, 0.84);
}
</style>
