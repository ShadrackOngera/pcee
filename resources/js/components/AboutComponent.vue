<template>
        <div>
            <div class="about-banner">
                <div class="container text-center">
                    <h1 class="display-3">
                        ABOUT US
                    </h1>
                    <h5>
                        PCEE
                    </h5>
                </div>
            </div>
            <div class="py-5"></div>

            <div>
                <div class="container" id="about">
                    <div class="col-sm-10">
                        <h2 class="about-title">
                            ABOUT US
                        </h2>
                        <p class="about-us-text">
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
                    <h2 class="about-title">CULTURE AND VALUES</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <h2 class="text-info">Our Mission</h2>
                                <p class="values">
                                    To make it easy to do travel anywhere
                                </p>
                            </div>
                            <div>
                                <h2 class="text-info">Our Vision</h2>
                                <p class="values">
                                    We aspire to be a good company that will serve it's customers diligently. We envision that our customers will drive and live happily with our services a call away.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-info">Values</h2>
                            <ul class="values">
                                <li>
                                    Customers first, employees second, shareholders third
                                </li>
                                <li>
                                    Today's best performance is tomorrow's baseline
                                </li>
                                <li>
                                    Drive Safely, Live seriously, work happily
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
            <div id="#team">
                <div class="container">
                    <h2 class="about-title">OUR TEAM</h2>
                    <div class="row mb-5">
                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>CLEMENT LIPESA</h3>
                            <h5 class="text-muted">CEO</h5>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>MOSES TSIAVULA</h3>
                            <h5 class="text-muted">MANAGER</h5>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>JOHN CARLOS</h3>
                            <h5 class="text-muted">HEAD OF SALES</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>CLIFFORD MANYARA</h3>
                            <h5 class="text-muted">LEAD DEV</h5>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>FULL NAME</h3>
                            <h5 class="text-muted">WORK TITLE</h5>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="/images/pics/unknown.png" alt="" class="img-fluid image-person">
                            <h3>FULL NAME</h3>
                            <h5 class="text-muted">WORK TITLE</h5>
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
.image-person{
    height: 200px;
    width: 200px;
    border-radius: 50%;
    align-self: center;
    margin-bottom: 20px;
}
.about-us-text{
    color: #4a5568;
    font-size: larger;
}
.about-title{
    margin-bottom: 20px;
    font-size: medium;
    font-weight: bolder;
}


.about-title::after{
    content: '';
    display: block;
    width: 10%;
    background-color: #0dcaf0;
    height: 4px;
}


.about-page-links{
    font-size: x-large;
}



.values{
    list-style: none;
    font-weight: 400;
    font-size: larger;
    color: #4a5568;
    display: flex;flex-direction: column;
    justify-content: center;
}



.active::after{
    background-color: #0dcaf0;
    content: "";
    display: block;
    height: 0.25rem;
    margin-top: -0.25rem;
}


</style>
