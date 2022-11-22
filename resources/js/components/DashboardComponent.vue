<template>
    <div class="py-3"></div>
    <div style="min-height: 80vh">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Settings</button>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Dashboard Navigation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="">
                        <div class="nav nav-tabs flex-sm-column" id="nav-tab" role="tablist">
                            <div
                                class="nav-link active card name-card shadow"
                                id="nav-account-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-account"
                                type="button"
                                role="tab"
                                aria-controls="nav-account"
                                aria-selected="true"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        My account
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-my-vehicle-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-my-vehicle"
                                type="button"
                                role="tab"
                                aria-controls="nav-my-vehicle"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        My Vehicle
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-interface-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-interface"
                                type="button"
                                role="tab"
                                aria-controls="nav-interface"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Interface
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-cloud-settings-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-cloud-settings"
                                type="button"
                                role="tab"
                                aria-controls="nav-cloud-settings"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Cloud Settings
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-user-profiles-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-user-profiles"
                                type="button"
                                role="tab"
                                aria-controls="nav-user-profiles"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        User Profiles
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-updates-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-updates"
                                type="button"
                                role="tab"
                                aria-controls="nav-updates"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Software & Updates
                                    </div>
                                </div>
                            </div>

                            <div
                                class="nav-link card name-card shadow"
                                id="nav-legal-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-legal"
                                type="button"
                                role="tab"
                                aria-controls="nav-legal"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="card icon-card p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                            <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                            <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Legal & Licensing
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <div class="tab-content pt-4" id="nav-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="nav-account"
                            role="tabpanel"
                            aria-labelledby="nav-account-tab"
                            tabindex="0"
                        >

                            Car over view tab
                        </div>

                        <div
                            class="tab-pane fade"
                            id="nav-my-vehicle"
                            role="tabpanel"
                            aria-labelledby="nav-my-vehicle-tab"
                            tabindex="0"
                        >
                            Car My Vehicle
                        </div>

                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-interface"
                            role="tabpanel"
                            aria-labelledby="nav-interface-tab"
                            tabindex="0"
                        >
                            Interface Tab
                        </div>

                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-cloud-settings"
                            role="tabpanel"
                            aria-labelledby="nav-cloud-settings-tab"
                            tabindex="0"
                        >
                            cloud-settings Tab
                        </div>

                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-user-profiles"
                            role="tabpanel"
                            aria-labelledby="nav-user-profiles-tab"
                            tabindex="0"
                        >
                            user-profiles Tab
                        </div>

                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-updates"
                            role="tabpanel"
                            aria-labelledby="nav-updates-tab"
                            tabindex="0"
                        >
                            updates Tab
                        </div>

                        <div
                            class="tab-pane fade vitals-body-maps"
                            id="nav-legal"
                            role="tabpanel"
                            aria-labelledby="nav-legal-tab"
                            tabindex="0"
                        >
                            legal Tab
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
</template>

<script>
export default {
    name: "DashboardComponent"
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
    width: 100%;
}
</style>
