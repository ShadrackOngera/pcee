<template>
    <div class="banner-mileage">
        <div class="position-relative" style="min-height: 72vh">
            <div class="">
                <nav class="navbar sidebar navbar-expand-lg bg-light navigation">
                    <div class="container-fluid flex-sm-column">
                        <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="nav nav-tabs flex-sm-column" id="nav-tab" role="tablist">
                                <div
                                    class="nav-link active name-card shadow"
                                    id="nav-mileage-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-mileage"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-mileage"
                                    aria-selected="true"
                                >
                                    <div class="d-flex align-items-center">
                                        <div class="card icon-card p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16">
                                                <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            Mileage
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="nav-link name-card shadow"
                                    id="nav-stats-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-stats"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-stats"
                                    aria-selected="false"
                                >
                                    <div class="d-flex align-items-center">
                                        <div class="card icon-card p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            Stats
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="nav-link name-card shadow"
                                    id="nav-history-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-history"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-history"
                                    aria-selected="false"
                                >
                                    <div class="d-flex align-items-center">
                                        <div class="card icon-card p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            Service History
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container">
                <div class="sidebar-body">
                    <div class="tab-content pt-4" id="nav-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="nav-mileage"
                            role="tabpanel"
                            aria-labelledby="nav-mileage-tab"
                            tabindex="0"
                        >

                            Cmileage
                        </div>

                        <div
                            class="tab-pane fade"
                            id="nav-stats"
                            role="tabpanel"
                            aria-labelledby="nav-stats-tab"
                            tabindex="0"
                        >
                            Care stats
                        </div>
                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-history"
                            role="tabpanel"
                            aria-labelledby="nav-history-tab"
                            tabindex="0"
                        >
                            history Tab
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-bar">
            <div class="row">
                <div class="col-sm-3 mb-4 mb-md-0">
                    <div
                        class="nav-link w-100 active music-card"
                        id="nav-account-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-account"
                        type="button"
                        role="tab"
                        aria-controls="nav-account"
                        aria-selected="true"
                    >
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="card icon-card p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note" viewBox="0 0 16 16">
                                    <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M9 3v10H8V3h1z"/>
                                    <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5V2.82z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-0">Rise Up</p>
                                <small class="text-muted">The Fat Rat</small>
                            </div>
                            <div>
                                <img src="/images/icons/media_controls.png" alt="" class="img-fluid">
                            </div>
                            <div class="text-muted align-self-center">
                                <small>
                                    08:10/12:30
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center mb-4 mb-md-0">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icons/nav.png" alt="" class="img me-4">
                        <img src="/images/icons/music.png" alt="" class="img me-4">
                        <img src="/images/icons/phone.png" alt="" class="img me-4">
                        <img src="/images/icons/analysis.png" alt="" class="img me-4">
                        <img src="/images/icons/engine.png" alt="" class="img me-4">
                        <img src="/images/icons/settings.png" alt="" class="img me-4">
                    </div>
                </div>
                <div class="col-sm-3 align-self-center mb-4 mb-md-0">
                    <div class="d-flex justify-content-center align-self-center">
                        <img src="/images/icons/brightness.png" alt="" class="img">
                        <img src="/images/icons/mic.png" alt="" class="img mx-3">
                        <img src="/images/icons/vol-medium.png" alt="" class="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "SettingsComponent"
}
</script>

<style scoped>
.icon-card{
    background-color: #C4C4C4;
    margin: 8px;
}
.name-card{
    background-color: #ccd5ce;
    margin-bottom: 16px;
    width: 320px;
}

.music-card{
    background-color: #ccd5ce;
    width: 320px;
    border-radius: 15px 15px 0 0;
}
.banner-mileage {
    background-repeat: no-repeat;
    background-size: cover;
    align-items: center;
}

.control-bar {
    background-color: rgba(255, 255, 255, 0.85);
}

@media (max-width: 768px) {
    .sidebar-body {
        width: 100%;
    }
}

@media (min-width: 768px) and (max-width: 2480px) {
    .sidebar{
        left: 0;
        width: 20%;
        height: 100%;
        min-height: 75vh;

    }
    .sidebar-body{
        position: absolute;
        top: 0;
        right: 0;
        width: 80%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.70);
    }

    .banner-mileage {
        background-image: url(/images/pics/mapholder.png);
    }
}
</style>
