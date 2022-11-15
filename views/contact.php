<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>CSS Responsive Contact Form With Google Map</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	</head>
    <style>
    

                .contact-in
                {
                    font-family: 'Poppins', sans-serif;
                    font-size : 15px;
                    width: 60%;
                    height: auto;
                    margin-left: 20%;
                    margin-right : 20%;
                    margin-bottom : 100px;
                    display: flex;
                    flex-wrap: wrap;
                    padding: 20px;
                    border-radius: 20px;
                    background: #fff;
                    box-shadow: 0px 0px 10px 0px #666;
                }

                .contact-map
                {
                    width: 60%;
                    height: auto;
                    flex: 60%;
                }
                .contact-map iframe
                {
                    width: 100%;
                    height: 100%;
                }
                .contact-form
                {
                    width: 100%;
                    height: auto;
                    flex: 50%;
                    padding: 30px;
                    text-align: center;
                }
                .contact-form h1
                {
                    margin-bottom: 10px;
                }

                .contact-form-txt
                {
                    width: 100%;
                    height: 40px;
                    color: #000;
                    border: 1px solid #bcbcbc;
                    border-radius: 50px;
                    outline: none;
                    margin-bottom: 20px;
                    padding: 15px;
                }
                .contact-form-txt::placeholder
                {
                    color: #aaa;
                }
                .contact-form-textarea
                {
                    width: 100%;
                    height: 130px;
                    color: #000;
                    border: 1px solid #bcbcbc;
                    border-radius: 10px;
                    outline: none;
                    margin-bottom: 20px;
                    padding: 15px;
                    font-family: 'Poppins', sans-serif;
                }
                .contact-form-textarea::placeholder
                {
                    color: #aaa;
                }

                .contact-form-btn
                {
                    width: 100%;
                    border:none;
                    outline: none;
                    border-radius: 50px;
                    color: #fff;
                    text-transform: uppercase;
                    padding: 10px 0;
                    cursor: pointer;
                    font-size: 18px;
                }


    </style>

	<body>
		<div class="contact-in">
			<div class="contact-map">
				<img src="https://www.cosmeticduweb.com/wp-content/uploads/2020/08/Contact-us_topbanner_cropped.jpg" width="100%" height="auto" frameborder="0" style="border:1px #006bb3 solid; border-top-left-radius : 20px ; border-top-right-radius : 20px" allowfullscreen="" aria-hidden="false" tabindex="0">
			</div>
			<div class="contact-form">
				<h1>Contact Us</h1>
				<form>
					<input type="text" placeholder="Name" class="contact-form-txt" />
					<input type="text" placeholder="Email" class="contact-form-txt" />
					<textarea placeholder="Message" class="contact-form-textarea"></textarea>
					<input type="submit" name="Submit" class="contact-form-btn" style="background-color : #006bb3" />
				</form>
			</div>
		</div>
	</body>
</html>