<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main</div>
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                           
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link"  href="http://127.0.0.1:8000/villageResidents">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Residents Records 
                            </a>
                            
                            <a class="nav-link" href="http://127.0.0.1:8000/authorityRecords">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Authority Records
                            </a>
                
                            <a class="nav-link" href="http://127.0.0.1:8000/complaintRecords">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Complaint Records
                            </a>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Actions</div>
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/addWards">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Add Wards
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/addAuthority">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Add Authority
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/admin/addComplaintType">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Add Complaint Type
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>