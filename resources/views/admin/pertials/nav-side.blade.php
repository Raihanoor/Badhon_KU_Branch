

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion" style="background: url('/images/site/back.PNG'); background-repeat: no-repeat; background-size: cover; " id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link text-light" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                    </a>
                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHome" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home Page
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseHome" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('homepage')}}">Homepage</a>
                
                        </nav>
                    </div>
                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-heart"></i></div>
                            Donors
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('all-donors')}}">All Donors</a>
                            <a class="nav-link text-light" href="{{route('createDonor')}}">Add New Donor</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSchool" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                            Schools
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSchool" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('all-schools')}}">All Schools</a>
                            <a class="nav-link text-light" href="{{route('createSchool')}}">Add New School</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonation" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Donations
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDonation" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('all-donations')}}">All Donations</a>
                            <a class="nav-link text-light" href="{{route('createDonation')}}">Create New Donation</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePatient" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
                            Patients
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePatient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('all-patients')}}">All Patients</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMessage" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
                            Messages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseMessage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-light" href="{{route('message-contact')}}">Contact Messages</a>
                            <a class="nav-link text-light" href="{{route('all-requests')}}">Blood Requests</a>
                        </nav>
                    </div>

                </div>
            </div>
        </nav>
</div>
