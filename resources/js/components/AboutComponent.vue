<template>
        <div>
            <div class="about-banner">
                <div class="container text-center">
                    <h1 class="display-3">
                        ABOUT US
                    </h1>
                    <h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur hic ullam.
                    </h5>
                </div>
            </div>

            <div class="container py-5">
                <div class="d-flex">
                    <a href="#about" class=" active culture nav-link me-3">About</a>
                    <a
                        class="nav-link {{ Request::is('*admins/users*') ? 'active' : '' }}"
                        href="#">
                        Users
                    </a>

                    <a href="#culture" id="culture" class="culture nav-link me-3">Culture and Values</a>
                    <a href="#" id="milestones" class="nav-link me-3">Milestones</a>
                    <a href="#" id="team" class="nav-link me-3">Our Team</a>
                </div>
            </div>

            <div>
                <div class="container" id="about">
                    <div class="col-sm-10">
                        <h2>
                            About Us
                        </h2>
                        <p>
                            We provide on-site predictive and reactive maintenance of  both personal and cooperate vehicles using telematics technology
                            (mechanics of distance) to diagnose car issues over distance. Our mechanics are given a thorough background check to ensure
                            that your property is safe. The mechanics are equipped with the latest tools to get the job done. We believe that time is
                            money and vehicle breakdown should not be allowed to waste yours
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
            <div id="culture">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <h2 class="text-info">Our Mission</h2>
                                <p class="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <div>
                                <h2 class="text-info">Our Vision</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, reprehenderit.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-info">Values</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
        </div>
</template>

<script>
export default {
    name: "AboutComponent"
}
</script>

<style scoped>
.about-banner{
    min-height: 72vh;
    background-color: #eeeeee;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
active{
    background-color: #0dcaf0;
    content: "";
    display: block;
    height: 0.25rem;
    margin-top: -0.25rem;
}
</style>
