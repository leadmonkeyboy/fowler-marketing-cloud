<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>

        <meta name="viewport" content="initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link href="css/fowler.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar justify-content-between">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="images/logo-fowler.png" alt="San Diego State University - Fowler School of Business" /></a>
                <h1><span>Communication</span> <span>Preferences</span></h1>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">My Profile</h2>
                            <form action="#" method="post" class="profile needs-validation">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="profile-email" class="form-label">Email</label>
                                        <input type="email" id="profile-email" class="form-control" required/>
                                    </div>                    
                                    <div class="col-sm-6">
                                        <label for="profile-mobile-phone" class="form-label">Mobile Phone</label>
                                        <input type="tel" id="profile-mobile-phone" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="profile-first-name" class="form-label">First Name</label>
                                        <input type="text" id="profile-first-name" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="profile-last-name" class="form-label">Last Name</label>
                                        <input type="text" id="profile-last-name" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="profile-address-1" class="form-label">Address Line 1</label>
                                        <input type="text" id="profile-address-1" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="profile-address-2" class="form-label">Address Line 2</label>
                                        <input type="text" id="profile-address-2" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="profile-city" class="form-label">City</label>
                                        <input type="text" id="profile-city" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="profile-region" class="form-label">State/Province/Region</label>
                                        <input type="text" id="profile-region" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="profile-postal-code" class="form-label">ZIP/Postal Code</label>
                                        <input type="text" id="profile-postal-code" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="profile-country" class="form-label">Country</label>
                                        <input type="text" id="profile-country" class="form-control" required/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Preferences</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Opt-In</h2>

                            <form action="#" method="post" class="subscription">
                                <div>
                                    <input type="checkbox" id="opt-in-newsletter"/>
                                    <label for="opt-in-newsletter" class="form-label">Newsletter</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="opt-in-events"/>
                                    <label for="opt-in-events" class="form-label">Events</label>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Preferences</button>
                            </form>

                            <form action="#" method="post">
                                <button type="submit" class="btn btn-secondary">Unsubscribe All</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>