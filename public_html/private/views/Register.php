<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="styles/style.css">

    <meta name="viewport" content="width-device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>

        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> NAME </span>
                        <input id="name" type="text" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> FAMILY NAME </span>
                        <input id="familyname" type="text" placeholder="Enter your Family Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> ADRESSE </span>
                        <input id="adresse" type="text" placeholder="Enter your Adresse" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> COUNTRY </span>
                        <select name="Pays" id="country">
                            <option value="Maroc">MOROCCO</option>
                            <option value="France">France</option>
                            <option value="Allemagne">Germany</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details"> CITY </span>
                        <input id="city" type="text" placeholder="Enter your City" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> ZIP </span>
                        <input id="zip" type="text" placeholder="Enter your ZIP " required>
                    </div>
                    <div class="input-box">
                        <span class="details"> ID </span>
                        <input id="id" type="text" placeholder="Enter your ID " required>
                    </div>
                    <div class="input-box">
                        <span class="details"> PASSWORD </span>
                        <input id="password" type="password" placeholder="Enter your password " required>
                    </div>
                    <div class="input-box">
                        <span class="details"> Verify PASSWORD </span>
                        <input id="rpassword" type="password" placeholder="Renter your password " required>
                    </div>
                    <div class="input-box">
                        <span class="details"> E-mail </span>
                        <input id="email" type="text" placeholder="Enter your E-mail " required>
                    </div>

                </div>
                <div class="button">
                    <input type="submit" value="Register">
                  </div>
            </form>
        </div>
    </div>
</body>

</html>